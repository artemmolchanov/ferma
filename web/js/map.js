var groups = [
	{
		name: "Адреса на карте",
		items: [
			{
				center: [54.9985,73.4409],
				id: 2,
			}
			,
			{
				center: [51.1655,71.4331],
				id: 1,
			}
		]
	}
];



$(document).ready(function() {
	// Карта
	ymaps.ready(init);

	function init() {
		window.myMap = new ymaps.Map('map', {
				center: [54.9985,73.4409],
				zoom: 17,
				controls: []
			});
			myMap.controls.add('zoomControl', { position: { right: 22, top: 54 }});
			menu = $('.contactOffice_blockLink');

		for (var i = 0, l = groups.length; i < l; i++) {
			createMenuGroup(groups[i]);
		}
        
		function createMenuGroup (group) {
			collection = new ymaps.GeoObjectCollection(null, { preset: group.style }),
			myMap.geoObjects.add(collection);

			for (var j = 0, m = group.items.length; j < m; j++) {
				addMenuItem(group.items[j], collection, menu);
			}
		}

		function addMenuItem (item, collection, menu) {
			var menuItem = $('<a href="javascript: void(0)">Показать на карте</a>'),
			placemark = new ymaps.Placemark(item.center, { },{
				
				// Необходимо указать данный тип макета.
				iconLayout: 'default#image',
				// Своё изображение иконки метки.
				iconImageHref: '/img/mark.png',
				// Размеры метки.
				iconImageSize: [161, 51],
				// Смещение левого верхнего угла иконки относительно
				// её "ножки" (точки привязки).
				iconImageOffset: [-30, -70],
			});

			collection.add(placemark);
			
			menuItem
				.appendTo(menu)
				.click(function () {
					myMap.panTo([
						item.center[0],
                        item.center[1]
					])
				});
		}
			myMap.behaviors.disable('scrollZoom');
		
	}
});	