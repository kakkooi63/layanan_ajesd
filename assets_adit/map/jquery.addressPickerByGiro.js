/*!
 * jQuery Address Picker ByGiro v0.0.9
 *
 * Copyright 2015, G. Tomaselli
 * Licensed under the MIT license.
 *
 */

 
// compatibility for jQuery / jqLite
var bg = bg || false;
if(!bg){
	if(typeof jQuery != 'undefined'){
		bg = jQuery;
	} else if(typeof angular != 'undefined'){
		bg = angular.element;
		bg.extend = angular.extend;	
	
		function selectResult(elem, selector){
			if (elem.length == 1)
				return elem[0].querySelectorAll(selector);
			else {
				var matches = [];
				for(var i=0;i<elem.length;i++){
					var elm = elem[i];
					var nodes = angular.element(elm.querySelectorAll(selector));
					matches.push.apply(matches, nodes.slice());					
				}
				return matches;

			}

		}	
	
		bg.prototype.is = function (selector){
			for(var i=0;i<this.length;i++){
				var el = this[i];
				if((el.matches || el.matchesSelector || el.msMatchesSelector || el.mozMatchesSelector || el.webkitMatchesSelector || el.oMatchesSelector).call(el, selector)) return true;
			}
			return false;
		}
		
		bg.prototype.find = function (selector){			
			var context = this[0];
			// Early return if context is not an element or document
			if (!context || (context.nodeType !== 1 && context.nodeType !== 9) || !angular.isString(selector)) {
				return [];
			}
			var matches = [];
			if (selector.charAt(0) === '>')
				selector = ':scope ' + selector;
			if (selector.indexOf(':visible') > -1) {
				var elems = angular.element(selectResult(this, selector.split(':visible')[0]))

				forEach(elems, function (val, i) {
					if (angular.element(val).is(':visible'))
						matches.push(val);
				})

			} else {
				matches = selectResult(this, selector)
			}

			if (matches.length) {
				if (matches.length == 1)
					return angular.element(matches[0])
				else {
					return angular.element(matches);
				}
			}
			return angular.element();
		};
		
		
		function size(element,type){
			if(typeof element == 'undefined') return null;
			
			var paddingA = 'paddingTop',
			paddingB = 'paddingBottom',
			method = 'offsetHeight',
			computedStyle,result;
			if(type == 'width'){
				paddingA = 'paddingLeft';
				paddingB = 'paddingRight';
				method = 'offsetWidth';
			}

			computedStyle = getComputedStyle(element);
			result = element[method];
			if (computedStyle)
				result -= parseFloat(computedStyle[paddingA]) + parseFloat(computedStyle[paddingB]);
			return result;				
		}
			
		bg.prototype.width = function () {
			return size(this[0],'width');
		};
		
		bg.prototype.height = function () {
			size(this[0]);
		};
	}
}

;(function ($) {
    "use strict";
    var methods;

	var timer = {};
	function delay (callback, ms, type){
		clearTimeout (timer[type]);
		timer[type] = setTimeout(callback, ms);
	}
		
	function updateElements(data){			
		var that = this, data = data || this.addressMapping[this.$element.val()],$sel, resetTask = false;
		if(!data) resetTask = true;
		
		for ( var k in this.settings.boundElements) {
			var dataProp = this.settings.boundElements[k];
			
			var newValue = '';
			if(typeof dataProp == 'function'){
				newValue = dataProp.call(that,data);
				
				continue;
			}

			$sel = $(dataProp);
			if(!resetTask && ($sel.length < 0 || !data.cleanData)) continue;
			
			if(!resetTask){				
				if(k == 'address_components'){
					newValue = JSON.stringify(data.cleanData);
				} else {
					newValue = data.cleanData[k];				
				}
			}
	
			
			var listCount = $sel.length;
			for ( var i = 0; i < listCount; i ++){
				var method = 'val',
				it = $sel.eq(i);
				if(!it.is('input, select, textarea')){
					method = 'text';
				};
				it[method](newValue || '');
			}

		}
		
		that.$element.parent().find('.suggestions-container').remove();
		if(!resetTask) that.$element.triggerHandler('selected.addressPickerByGiro', data);		
	}
	
	function createMarker(){
		var that = this,
		opts = that.settings,
		mapOptions = $.extend({}, opts.mapOptions);
		mapOptions.center = new google.maps.LatLng(mapOptions.center[0], mapOptions.center[1]);
		
		var markerOptions = {
			position: mapOptions.center,
			draggable: true,
			raiseOnDrag: true,
			map: that.gmap,
			labelContent: opts.text.you_are_here,
			labelAnchor: new google.maps.Point(0, 0),
			labelClass: opts.markerLabelClass,
			labelStyle: {
				opacity: 1
			}
		};
		
		// marker
		if (opts.markerType == 'styled' && typeof StyledMarker == "function"){
			// styled marker
			var styleIcon = new StyledIcon(StyledIconTypes.BUBBLE,{color:"#51A351",fore:'#ffffff',text:opts.text.you_are_here});
			markerOptions.styleIcon = styleIcon;				
			that.gmarker = new StyledMarker(markerOptions);				
		} else if (opts.markerType == 'labeled' && typeof MarkerWithLabel == "function"){
			// labeled marker
			that.gmarker = new MarkerWithLabel(markerOptions);
		} else {
			// default marker
			that.gmarker = new google.maps.Marker(markerOptions);
		}				
		
		// event triggered when marker is dragged and dropped
		google.maps.event.addListener(that.gmarker, "dragend", function () {
			that.geocodeLookup(that.gmarker.getPosition(), false, "latLng", true);
		});
		// event triggered when map is clicked
		google.maps.event.addListener(that.gmap, "click", function (event) {
			that.gmarker.setPosition(event.latLng);
			that.geocodeLookup(event.latLng, false, "latLng", true);
			that.resizeMap();
		});		
		
		this.gmarker.setVisible(false);
	}
	
	function createCircle(){		
		var that = this,
		opts = that.settings,
		radius,
		mapOptions = $.extend({}, opts.mapOptions);
		
		mapOptions.center = new google.maps.LatLng(mapOptions.center[0], mapOptions.center[1]);
		
		if(radius){
			radius = radius * 1000; // Km -> m
		}
		
		radius = radius || opts.distanceWidgetRadius;
		var circle =  new google.maps.Circle({
			center: mapOptions.center,
			radius: 100, // Km
			strokeColor: "#005DE0",
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: "#005DE0",
			fillOpacity: 0.25,
			map: that.gmap
		}),
		handleMouseEnter = function ( event ) {
			circle.setEditable( true );
		},
		handleMouseLeave = function ( event ) {
			circle.setEditable( false );
		};
				
		that.gcircle = circle;
		that.gcircle.setVisible(false);	
		
		google.maps.event.addListener(that.gcircle, 'radius_changed', function(){
			that.updater();
		});
		google.maps.event.addListener( that.gcircle, 'mouseover', handleMouseEnter );
		google.maps.event.addListener( that.gcircle, 'mouseout' , handleMouseLeave );
		
		// bind circle to marker dragging
		that.gcircle.bindTo('center', that.gmarker, 'position');
	}	

    methods = {
        init: function ($element, options) {
            var that = this;
            that.$element = $element;
            that.settings = $.extend({}, {
				style: "display", // if "hidden" the map will be shown when the user touch the input field
                map: false,
                mapId: false,
				mapWidth: '100%',
				mapHeight: '300px',
                mapOptions: {
                    zoom: 30,
                    center: [103.8487744, -2.8954796],
                    scrollwheel: false,
                    mapTypeId: "roadmap"
                },
				zoom: false,
				makerType: false, /* labeled, styled */
				distanceWidget: false,
				distanceWidgetRadius: 30000,  /* meters */
                appendToAddressString: '',
                geocoderOptions: {
					language: "en"
                },
				searchInitialValue: true,
                boundElements: {},
				
				// internationalization
				text: {
					you_are_here: "You are here!",
				},
				map_rendered: false,
            }, options);
			var opts = that.settings;
			
            // hash to store geocoder results keyed by address
            that.addressMapping = {};
            that.currentItem = '';
            that.geocoder = new google.maps.Geocoder();

			// let's add a container
			that.$element.wrap('<div style="position: relative;" class="addresspicker-container"></div>');
			
            that.initMap.call(that);
			var ele = that.$element.parent()[0];
			
			function onEvent(e){				
				if(e.type == 'mouseover') $(this).addClass('mouseishover');
				
				if(!that.$element.is(':focus')) return;
				
				if(opts.style == 'hidden'){
					that.$mapContainer.css('display','block');
				}
				that.resizeMap();
			}
			
			function offEvent(e){
				if(e.type == 'mouseout') $(this).removeClass('mouseishover');
				
				if($(this).hasClass('mouseishover') || that.$element.is(':focus')) return;
				
				if(opts.style == 'hidden'){
					// that.geocodeLookup(that.$element.val(), false, '', true);
					that.$mapContainer.css('display','none');
					that.$element.parent().find('.suggestions-container').remove();
				}				
			}
			
			ele.addEventListener("focus", onEvent, true);
			ele.addEventListener("blur", offEvent, true);
			ele.addEventListener("mouseover", onEvent, true);
			ele.addEventListener("mouseout", offEvent, true);
			
			that.$element.parent()
			.on('keyup',function(){
				that.$element
					.addClass('invalid-address')
					.removeClass('valid-address');

				that.showSuggestions();
			})
			.on('click',function(e){
				var li = $(e.target);
				if(!li.is('.suggestions-container li')) return;
				
				that.geocodeLookup(li.text(), false, '', true);
				$(this).find('.suggestions-container').remove();
			});
			
			// load current address if any
			if(opts.searchInitialValue && that.$element.val() != ''){
				that.geocodeLookup(that.$element.val(), false, '', true);
			}
        },
        initMap: function () {
			var that = this,
			opts = that.settings;
            if (!opts.mapId && !(opts.map instanceof google.maps.Map)){
                // create map and hide it
				opts.mapId = (new Date).getTime() + Math.floor((Math.random() * 9999999) + 1);
				that.$mapContainer = $('<div style="margin: 5px 0; width: '+ opts.mapWidth +'; height: '+ opts.mapHeight +';" id="'+ opts.mapId +'"></div>');
				that.$element.after(that.$mapContainer);
            } else {
				that.$mapContainer = $(opts.mapId);
			}
			
			if(opts.style == 'hidden'){
				that.$mapContainer.css('display','none');
			}
			
            if (that.map_rendered == true) {
                that.resizeMap.call(that);
                return;
            }
			
            var mapOptions = $.extend({}, opts.mapOptions),
                baseQueryParts, markerOptions;

			if(!(this.settings.map instanceof google.maps.Map)){
				mapOptions.center = new google.maps.LatLng(mapOptions.center[0], mapOptions.center[1]);
				this.gmap = new google.maps.Map(that.$mapContainer[0], mapOptions);
			} else {
				this.gmap = this.settings.map;
			}
			
			// create marker
			createMarker.call(this);

			// create circle
			if (this.settings.distanceWidget){
				createCircle.call(this);
			}
			
			that.map_rendered = true;
        },
        showSuggestions: function () {
            var that = this;
			
			
			delay(function(){
				that.geocodeLookup(that.$element.val(), function (geocoderResults){
					var html = '<div style="position: absolute;z-index: 2000;background:#fff;" class="suggestions-container"><ul>';
					
					for(var a in this.addressMapping){
						html += '<li>'+ a +'</li>';
					}
					
					html += '</ul></div>';
					
					if(that.$element.next().hasClass('suggestions-container')){
						that.$element.next().remove();
					}
					
					// add suggestions container
					that.$element.after(html);
				}, false,false,true);
			}, 250, 'source');
			
        },
        updater: function (item) {
            var that = this, item = item || that.$element.val(),
			data = this.addressMapping[item] || false,
			propertiesMap,cleanData = {},latLng;

            if (!data) {
                return;
            }
			latLng = data.geometry.location;
			
			// cleanData
			propertiesMap = {
				'country': {
					'long_name': 'country',
					'short_name': 'country_code'
				},
				'administrative_area_level_1': {
					'long_name': 'region',
					'short_name': 'region_code'
				},
				'administrative_area_level_2': {
					'long_name': 'county',
					'short_name': 'county_code'
				},
				'locality': {
					'long_name': 'city'
				},
				'sublocality': {
					'long_name': 'city_district'
				},
				'postal_code': {
					'long_name': 'zip'
				},
				'route': {
					'long_name': 'street'
				},
				'street_number': {
					'long_name': 'street_number'
				}
			};		

			if(data.address_components){
				for(var a=0;a<data.address_components.length;a++){
					var adr = data.address_components[a];
					for(var p in propertiesMap){
						if(adr.types.indexOf(p) >= 0){
							for(var pp in propertiesMap[p]){
								if(typeof adr[pp] != 'undefined'){
									cleanData[propertiesMap[p][pp]] = adr[pp];
								}								
							}
						}
					}
				}
			}
			cleanData.latitude = Number(latLng.lat().toFixed(8));
			cleanData.longitude = Number(latLng.lng().toFixed(8));
			cleanData.formatted_address = data.formatted_address;

            if (that.gmarker) {
                that.gmarker.setPosition(data.geometry.location);
                that.gmarker.setVisible(true);

            }
			
			if(that.gcircle){
				that.gcircle.setCenter(data.geometry.location);
				that.gcircle.setVisible(true);

				cleanData.radius = Math.round(that.gcircle.getRadius()) / 1000;
			}

			if(that.gcircle){				
				that.gmap.fitBounds(that.gcircle.getBounds());
			} else {
				that.gmap.fitBounds(data.geometry.viewport);
			}

			data.cleanData = cleanData;
			updateElements.call(that,data);

            return item;
        },
        currentAddress: function () {
            return this.addressMapping[this.$element.val()] || {};
        },
        geocodeLookup: function (query, callback, type, updateUi, forceCall) {
			updateUi = updateUi || false;
			type = type || '';
			var that=this,
			opts = that.settings,
			request = $.extend({},opts.geocoderOptions);
			
			// immediately reset the input if we are going to perform a geocode lookup
			if(updateUi){
				// clean previous data
				updateElements.call(that);
			}				
			if(type == 'latLng'){
				if (typeof query == "string") {
					query = query.split(",");
					query = new google.maps.LatLng(query[0], query[1]);
				}
				request.latLng = query;
			} else {
				request.address = query + opts.appendToAddressString;
	
				// if we already have the address, we don't need to call google
				if(!forceCall && typeof callback == 'function' && typeof that.addressMapping[query] != 'undefined'){
					if(updateUi){
						that.updater(query);
					}					
					return;
				}				
			}

            this.geocoder.geocode(request, function (geocoderResults, status) {
                if(status !== google.maps.GeocoderStatus.OK) return;
				
				that.addressMapping = {};
				for ( var i = 0; (i < geocoderResults.length && i<9); i ++){ // limit to max 9 suggestions
					var element = geocoderResults[i];
					that.addressMapping[element.formatted_address] = element;
				}
				
				if (typeof callback == 'function') {
                    callback.call(that, geocoderResults);
                }
				
				if(updateUi){
					var address = geocoderResults[0].formatted_address;
					that.$element.val(address)
						.addClass('valid-address')
						.removeClass('invalid-address');
					
					// set we have a valid address
					that.addressMapping[address] = geocoderResults[0];
					that.updater(address);
				}
            });
        },
        resizeMap: function (latitude, longitude) {
			var that = this;
			delay(function(){
				var lastCenter,
				opts = that.settings,
				map_cont = that.$mapContainer ? that.$mapContainer.parent() : $("#" + opts.mapId).parent();
				
				if(!map_cont.length) return;
				
				var parent_map_cont = map_cont.parent(),
				h = parent_map_cont.height(),
				w = parent_map_cont.width();
				
				//map_cont.css("height", h);
				//map_cont.css("width", w);
				if (typeof latitude != "undefined" && typeof longitude != "undefined") {
						lastCenter = new google.maps.LatLng(latitude, longitude);
					} else {
						lastCenter = that.gmap.getCenter();
				}
				
				if(opts.zoom){
					that.gmap.setZoom(opts.zoom);					
				}				
				
				google.maps.event.trigger(that.gmap, "resize");
				that.gmap.setCenter(lastCenter);
			},300,'resize');			
        },
		setRadius: function(radius){ // in km
			var that = this;
			if(!that.gcircle) return;
			
			that.gcircle.setRadius(radius *1000);
			that.gmap.fitBounds(that.gcircle.getBounds());
		}
    };

    var main = function (method) {
        var addressPickerByGiro = this.data('addressPickerByGiro');
        if (addressPickerByGiro) {
            if (typeof method === 'string' && addressPickerByGiro[method]) {
                return addressPickerByGiro[method].apply(addressPickerByGiro, Array.prototype.slice.call(arguments, 1));
            }
            return console.log('Method ' +  method + ' does not exist on jQuery.addressPickerByGiro');
        } else {
            if (!method || typeof method === 'object') {
				
				var listCount = this.length;
				for ( var i = 0; i < listCount; i ++) {
					var $this = $(this[i]);
                    addressPickerByGiro = $.extend({}, methods);
                    addressPickerByGiro.init($this, method);
                    $this.data('addressPickerByGiro', addressPickerByGiro);
				};

				return this;
            }
            return console.log('jQuery.addressPickerByGiro is not instantiated. Please call $("selector").addressPickerByGiro({options})');
        }
    };

	// plugin integration
	if($.fn){
		$.fn.addressPickerByGiro = main;
	} else {
		$.prototype.addressPickerByGiro = main;
	}
}(bg));
