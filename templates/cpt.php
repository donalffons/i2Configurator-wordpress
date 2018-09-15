<h1>CPT Manager</h1>

		<script>

			window.URL = window.URL || window.webkitURL;
			window.BlobBuilder = window.BlobBuilder || window.WebKitBlobBuilder || window.MozBlobBuilder;

			Number.prototype.format = function (){
				return this.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
			};

			//

			var editor = new Editor();

			var viewport = new Viewport( editor );
			document.body.appendChild( viewport.dom );

			var player = new Player( editor );
			document.body.appendChild( player.dom );

			var toolbar = new Toolbar( editor );
			document.body.appendChild( toolbar.dom );

			var menubar = new Menubar( editor );
			document.body.appendChild( menubar.dom );

			var sidebar = new Sidebar( editor );
			document.body.appendChild( sidebar.dom );

			var modal = new UI.Modal();
			document.body.appendChild( modal.dom );

			var loadingScreen = new UI.LoadingScreen();
			document.body.appendChild( loadingScreen.dom );

			//

			editor.setTheme( editor.config.getKey( 'theme' ) );

			function onWindowResize( event ) {

				editor.signals.windowResize.dispatch();

			}

			window.addEventListener( 'resize', onWindowResize, false );

			onWindowResize();

			//
			$(document).ready(function() {
				setCurrentModelAndVariant(() => {
					loadingScreen.show();
					LoadModel(() => {
						LoadVariant();
						loadingScreen.hide();
					}, (event) => {
						let currStep = event.currFile;
						let totalSteps = event.totalFiles;
						let stepName = event.stepName;
						var size = '(' + Math.floor( event.total / 1000 ).format() + ' KB)';
						var progress = Math.floor( ( event.loaded / event.total ) * 100 ) + '%';

						loadingScreen.update(currStep, totalSteps, stepName, size, progress);
					});
				});
			});

			/*
			window.addEventListener( 'message', function ( event ) {

				editor.clear();
				editor.fromJSON( event.data );

			}, false );
			*/

		</script>