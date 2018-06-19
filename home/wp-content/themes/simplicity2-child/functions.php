<?php //子テーマ用関数

//親skins の取得有無の設定
function include_parent_skins(){
  return true; //親skinsを含める場合はtrue、含めない場合はfalse
}

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下にSimplicity子テーマ用の関数を書く
if (function_exists('register_sidebar')){
	register_sidebar(array(
			'before_widget' => '<div class="top_main_widget" id="%1$s">'."\n",
			'after_widget' => '</div>'."\n",
			'before_title' => '<h3>',
			'after_title' => '</h3>',
			'name' => 'トップメイン',
			'id' => 'top_main_widget'
	));
}
