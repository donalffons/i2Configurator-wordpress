<?php 
/**
 * @package  i2ConfiguratorPlugin
 */
namespace Inc\Base;

use Inc\Base\BaseController;

/**
* 
*/
class Enqueue extends BaseController
{
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}
	
	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/mystyle.css' );
		wp_enqueue_script( 'mypluginscript', $this->plugin_url . 'assets/myscript.js' );

		$css_files = [
			'css/main.css',
			'css/light.css',
			'css/my.css',
			
			'three.js/editor/js/libs/codemirror/codemirror.css',
			'three.js/editor/js/libs/codemirror/theme/monokai.css',
			
			'three.js/editor/js/libs/codemirror/addon/dialog.css',
			'three.js/editor/js/libs/codemirror/addon/show-hint.css',
			'three.js/editor/js/libs/codemirror/addon/tern.css',
			];
		$js_files = [
			'three.js/build/three.js',
			'three.js/examples/js/libs/system.min.js',
			
			'three.js/examples/js/controls/EditorControls.js',
			'three.js/examples/js/controls/TransformControls.js',
			
			'three.js/examples/js/libs/jszip.min.js',
			'three.js/examples/js/libs/inflate.min.js',
			
			'three.js/examples/js/loaders/AMFLoader.js',
			'three.js/examples/js/loaders/AWDLoader.js',
			'three.js/examples/js/loaders/BabylonLoader.js',
			'three.js/examples/js/loaders/ColladaLoader.js',
			'three.js/examples/js/loaders/FBXLoader.js',
			'three.js/examples/js/loaders/GLTFLoader.js',
			'three.js/examples/js/loaders/deprecated/LegacyGLTFLoader.js',
			'three.js/examples/js/loaders/KMZLoader.js',
			'three.js/examples/js/loaders/MD2Loader.js',
			'three.js/examples/js/loaders/OBJLoader.js',
			'three.js/examples/js/loaders/MTLLoader.js',
			'three.js/examples/js/loaders/PlayCanvasLoader.js',
			'three.js/examples/js/loaders/PLYLoader.js',
			'three.js/examples/js/loaders/STLLoader.js',
			'three.js/examples/js/loaders/SVGLoader.js',
			'three.js/examples/js/loaders/TGALoader.js',
			'three.js/examples/js/loaders/TDSLoader.js',
			'three.js/examples/js/loaders/VRMLLoader.js',
			'three.js/examples/js/loaders/VTKLoader.js',
			'three.js/examples/js/loaders/ctm/lzma.js',
			'three.js/examples/js/loaders/ctm/ctm.js',
			'three.js/examples/js/loaders/ctm/CTMLoader.js',
			
			'three.js/examples/js/exporters/ColladaExporter.js',
			'three.js/examples/js/exporters/GLTFExporter.js',
			'three.js/examples/js/exporters/OBJExporter.js',
			'three.js/examples/js/exporters/STLExporter.js',
			
			'three.js/examples/js/renderers/Projector.js',
			'three.js/examples/js/renderers/CanvasRenderer.js',
			'three.js/examples/js/renderers/RaytracingRenderer.js',
			'three.js/examples/js/renderers/SoftwareRenderer.js',
			'three.js/examples/js/renderers/SVGRenderer.js',
			
			'three.js/editor/js/libs/codemirror/codemirror.js',
			'three.js/editor/js/libs/codemirror/mode/javascript.js',
			'three.js/editor/js/libs/codemirror/mode/glsl.js',
			
			'three.js/editor/js/libs/esprima.js',
			'three.js/editor/js/libs/jsonlint.js',
			'three.js/editor/js/libs/glslprep.min.js',
			
			'three.js/editor/js/libs/codemirror/addon/dialog.js',
			'three.js/editor/js/libs/codemirror/addon/show-hint.js',
			'three.js/editor/js/libs/codemirror/addon/tern.js',
			'three.js/editor/js/libs/acorn/acorn.js',
			'three.js/editor/js/libs/acorn/acorn_loose.js',
			'three.js/editor/js/libs/acorn/walk.js',
			'three.js/editor/js/libs/ternjs/polyfill.js',
			'three.js/editor/js/libs/ternjs/signal.js',
			'three.js/editor/js/libs/ternjs/tern.js',
			'three.js/editor/js/libs/ternjs/def.js',
			'three.js/editor/js/libs/ternjs/comment.js',
			'three.js/editor/js/libs/ternjs/infer.js',
			'three.js/editor/js/libs/ternjs/doc_comment.js',
			'three.js/editor/js/libs/tern-threejs/threejs.js',
			
			'three.js/editor/js/libs/signals.min.js',
			'js/ui.js',
			'js/ui.three.js',
			
			'three.js/editor/js/libs/app.js',
			'three.js/editor/js/Player.js',
			'three.js/editor/js/Script.js',
			
			'three.js/examples/js/vr/WebVR.js',
			
			'three.js/editor/js/Storage.js',
			
			'js/Editor.js',
			'three.js/editor/js/Config.js',
			'three.js/editor/js/History.js',
			'js/Loader.js',
			'js/Menubar.js',
			'js/Menubar.File.js',
			'three.js/editor/js/Menubar.Edit.js',
			'js/Menubar.Add.js',
			'three.js/editor/js/Menubar.Play.js',
			/*'js/Menubar.View.js',*/
			'three.js/editor/js/Menubar.Examples.js',
			'three.js/editor/js/Menubar.Help.js',
			'three.js/editor/js/Menubar.Status.js',
			'js/Sidebar.js',
			'three.js/editor/js/Sidebar.Scene.js',
			'three.js/editor/js/Sidebar.Project.js',
			'three.js/editor/js/Sidebar.Settings.js',
			'three.js/editor/js/Sidebar.Settings.Shortcuts.js',
			'three.js/editor/js/Sidebar.Settings.Viewport.js',
			'three.js/editor/js/Sidebar.Properties.js',
			'js/Sidebar.Object.js',
			'three.js/editor/js/Sidebar.Geometry.js',
			'three.js/editor/js/Sidebar.Geometry.Geometry.js',
			'three.js/editor/js/Sidebar.Geometry.BufferGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.Modifiers.js',
			'three.js/editor/js/Sidebar.Geometry.BoxGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.CircleGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.CylinderGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.IcosahedronGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.PlaneGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.SphereGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.TorusGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.TorusKnotGeometry.js',
			'three.js/examples/js/geometries/TeapotBufferGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.TeapotBufferGeometry.js',
			'three.js/editor/js/Sidebar.Geometry.LatheGeometry.js',
			'js/Sidebar.Material.js',
			'three.js/editor/js/Sidebar.Animation.js',
			'three.js/editor/js/Sidebar.Script.js',
			'three.js/editor/js/Sidebar.History.js',
			'three.js/editor/js/Toolbar.js',
			'js/Viewport.js',
			'three.js/editor/js/Viewport.Info.js',
			
			'three.js/editor/js/Command.js',
			'js/commands/AddObjectCommand.js',
			'three.js/editor/js/commands/RemoveObjectCommand.js',
			'three.js/editor/js/commands/MoveObjectCommand.js',
			'three.js/editor/js/commands/SetPositionCommand.js',
			'three.js/editor/js/commands/SetRotationCommand.js',
			'three.js/editor/js/commands/SetScaleCommand.js',
			'three.js/editor/js/commands/SetValueCommand.js',
			'three.js/editor/js/commands/SetUuidCommand.js',
			'three.js/editor/js/commands/SetColorCommand.js',
			'three.js/editor/js/commands/SetGeometryCommand.js',
			'three.js/editor/js/commands/SetGeometryValueCommand.js',
			'three.js/editor/js/commands/MultiCmdsCommand.js',
			'three.js/editor/js/commands/AddScriptCommand.js',
			'three.js/editor/js/commands/RemoveScriptCommand.js',
			'three.js/editor/js/commands/SetScriptValueCommand.js',
			'three.js/editor/js/commands/SetMaterialCommand.js',
			'three.js/editor/js/commands/SetMaterialValueCommand.js',
			'three.js/editor/js/commands/SetMaterialColorCommand.js',
			'three.js/editor/js/commands/SetMaterialMapCommand.js',
			'three.js/editor/js/commands/SetSceneCommand.js',
			
			'three.js/editor/js/libs/html2canvas.js',
			'three.js/editor/js/libs/three.html.js',
			'js/variantLoader.js',
			'js/commands/AddActionObjectPropertyCommand.js',
			'js/commands/RemoveActionObjectPropertyCommand.js',
			'js/commands/AddActionMaterialTypeCommand.js',
			'js/commands/RemoveActionMaterialTypeCommand.js',
			'js/commands/AddActionMaterialPropertyCommand.js',
			'js/commands/RemoveActionMaterialPropertyCommand.js',
			'js/commands/AddActionMaterialMapImageCommand.js',
			'js/commands/RemoveActionMaterialMapImageCommand.js',
			
			'../i2ConfiguratorCore/build/i2ConfiguratorCore.min.js'];

		foreach ($css_files as &$css_file) {
			wp_enqueue_style( 'i2ConfiguratorEditorViewer_'.$css_file, $this->plugin_url . 'i2ConfiguratorEditorViewer/'.$css_file );
		}
		foreach ($js_files as &$js_file) {
			wp_enqueue_script( 'i2ConfiguratorEditorViewer_'.$js_file, $this->plugin_url . 'i2ConfiguratorEditorViewer/'.$js_file );
		}
	}
}