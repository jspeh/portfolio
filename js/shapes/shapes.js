{
	const DOM = {};
	DOM.svg = document.querySelector('.morph');
	DOM.shapeEl = DOM.svg.querySelector('polygon');
	DOM.contentElems = Array.from(document.querySelectorAll('.shape-wrap'));
    // DOM.footer = document.querySelector('.content--related');
	DOM.footer = document.querySelector('.site-footer');
	const contentElemsTotal = DOM.contentElems.length;
	const shapes = [
		{
			points: '700,84.4 1047.1,685.6 352.9,685.6 352.9,685.6 352.9,685.6 352.9,685.6',
			scaleX: .8,
			scaleY: .9,
			rotate: 0,
			tx: 0,
			ty: 0,
			fill: {
				color: 'none',
				duration: 500,
				easing: 'linear'
			},
			animation: {
				points: {
					duration: 500,
					easing: 'easeOutExpo'
				},
				svg: {
					duration: 1500,
					easing: 'easeOutElastic'
				}
			}
		},
		{
			points: '983.4,101.6 983.4,668.4 416.6,668.4 416.6,101.9 416.6,101.9 416.6,101.9',
			scaleX: .7,
			scaleY: .7,
			rotate: 90,
			tx: -100,
			ty: 100,
			fill: {
				color: 'none',
				duration: 500,
				easing: 'linear'
			},
			animation: {
				points: {
					duration: 500,
					easing: 'easeOutExpo'
				},
				svg: {
					duration: 1500,
					easing: 'easeOutElastic'
				}
			}
		},
		{
			points: '890.9,54.3 1081.8,385 890.9,715.7 509.1,715.7 318.2,385 509.1,54.3',
			scaleX: 1,
			scaleY: 1,
			rotate: -45,
			tx: 0,
			ty: -50,
			fill: {
				color: 'none',
				duration: 500,
				easing: 'linear'
			},
			animation: {
				points: {
					duration: 500,
					easing: 'easeOutExpo'
				},
				svg: {
					duration: 1500,
					easing: 'easeOutElastic'
				}
			}
		},
		{
			points: '983.4,101.6 779,385 983.4,668.4 416.6,668.4 611,388 416.6,101.9',
			scaleX: 1,
			scaleY: 1,
			rotate: 145,
			tx: 100,
			ty: -50,
			fill: {
				color: 'none',
				duration: 500,
				easing: 'linear'
			},
			animation: {
				points: {
					duration: 500,
					easing: 'easeOutExpo'
				},
				svg: {
					duration: 1500,
					easing: 'easeOutElastic'
				}
			}
		},
		{
			points: '983.4,101.6 1255,385 983.4,668.4 416.6,668.4 157,368 416.6,101.9',
			scaleX: .7,
			scaleY: .7,
			rotate: -70,
			tx: -50,
			ty: 50,
			fill: {
				color: 'none',
				duration: 500,
				easing: 'linear'
			},
			animation: {
				points: {
					duration: 500,
					easing: 'easeOutExpo'
				},
				svg: {
					duration: 1500,
					easing: 'easeOutElastic'
				}
			}
		},
		{
			points: '983.4,101.6 983.4,668.4 416.6,668.4 416.6,101.9 416.6,101.9 416.6,101.9',
			scaleX: 1.2,
			scaleY: 1.2,
			rotate: 20,
			tx: 0,
			ty: 0,
			fill: {
				color: 'none',
				duration: 500,
				easing: 'linear'
			},
			animation: {
				points: {
					duration: 500,
					easing: 'easeOutExpo'
				},
				svg: {
					duration: 1500,
					easing: 'easeOutElastic'
				}
			}
		}
	];
	let step;

	const initShapeEl = function() {
		anime.remove(DOM.svg);
		anime({
			targets: DOM.svg,
			duration: 1,
			easing: 'linear',
			scaleX: shapes[0].scaleX,
			scaleY: shapes[0].scaleY,
			translateX: shapes[0].tx+'px',
			translateY: shapes[0].ty+'px',
			rotate: shapes[0].rotate+'deg'
		});
	};

	const createScrollWatchers = function() {
		DOM.contentElems.forEach((el,pos) => {
			const scrollElemToWatch = pos ? DOM.contentElems[pos] : DOM.footer;
			pos = pos ? pos : contentElemsTotal;
			const watcher = scrollMonitor.create(scrollElemToWatch,-350);
			
			watcher.enterViewport(function() {
				step = pos;
				anime.remove(DOM.shapeEl);
				anime({
					targets: DOM.shapeEl,
					duration: shapes[pos].animation.points.duration,
					easing: shapes[pos].animation.points.easing,
					elasticity: shapes[pos].animation.points.elasticity || 0,
					points: shapes[pos].points,
					fill: {
						value: shapes[pos].fill.color,
						duration: shapes[pos].fill.duration,
						easing: shapes[pos].fill.easing
					}
				});

				anime.remove(DOM.svg);
				anime({
					targets: DOM.svg,
					duration: shapes[pos].animation.svg.duration,
					easing: shapes[pos].animation.svg.easing,
					elasticity: shapes[pos].animation.svg.elasticity || 0,
					scaleX: shapes[pos].scaleX,
					scaleY: shapes[pos].scaleY,
					translateX: shapes[pos].tx+'px',
					translateY: shapes[pos].ty+'px',
					rotate: shapes[pos].rotate+'deg'
				});
			});

			watcher.exitViewport(function() {
				const idx = !watcher.isAboveViewport ? pos-1 : pos+1;

				if( idx <= contentElemsTotal && step !== idx ) {
					step = idx;
					anime.remove(DOM.shapeEl);
					anime({
						targets: DOM.shapeEl,
						duration: shapes[idx].animation.points.duration,
						easing: shapes[idx].animation.points.easing,
						elasticity: shapes[idx].animation.points.elasticity || 0,
						points: shapes[idx].points,
						fill: {
							value: shapes[idx].fill.color,
							duration: shapes[idx].fill.duration,
							easing: shapes[idx].fill.easing
						}
					});

					anime.remove(DOM.svg);
					anime({
						targets: DOM.svg,
						duration: shapes[idx].animation.svg.duration,
						easing: shapes[idx].animation.svg.easing,
						elasticity: shapes[idx].animation.svg.elasticity || 0,
						scaleX: shapes[idx].scaleX,
						scaleY: shapes[idx].scaleY,
						translateX: shapes[idx].tx+'px',
						translateY: shapes[idx].ty+'px',
						rotate: shapes[idx].rotate+'deg'
					});
				}
			});
		});
	};

	const init = function() {
        initShapeEl();
        createScrollWatchers();
	}

	init();
};