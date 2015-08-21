<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'			=>	'ltr',	// ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'			=>	'ja',

// Number formatting
'lang_decimal_point'		=>	'.',
'lang_thousands_sep'		=>	',',

// Notices
'Bad request'				=>	'Bad request: リンク切れか古いリンクです。',
'No view'					=>	'このフォーラムを閲覧する権限がありません。',
'No permission'				=>	'このページにアクセスする権限がありません。',
'CSRF token mismatch'		=>	'セキュリティトークンを確認できませんでした。このページに入ってからかなり時間たってから投稿したみたいです。操作を続けたい場合には確認ボタンをクリックしてください。あるいは、キャンセルボタンで戻ってください。',
'No cookie'					=>	'ログインには成功していますが、クッキーがセットされていません。設定を確認して、可能ならこのサイトでのクッキーを有効にしてください。',


// Miscellaneous
'Forum index'				=>	'Forum index',
'Submit'					=>	'送信',	// "name" of submit buttons
'Cancel'					=>	'キャンセル', // "name" of cancel buttons
'Preview'					=>	'プレビュー',	// submit button to preview message
'Delete'					=>	'削除',
'Split'						=>	'Split',
'Ban message'				=>	'あなたはこのフォーラムへの入室が禁止されています。',
'Ban message 2'				=>	'禁止期間は %s までです。',
'Ban message 3'				=>	'あなたを出禁にした管理者かモデレーターからのメッセージ:',
'Ban message 4'				=>	'フォーラム管理者に直接問い合わせてください。 %s',
'Never'						=>	'未投稿',
'Today'						=>	'今日',
'Yesterday'					=>	'昨日',
'Forum message'				=>	'フォーラムメッセージ',
'Maintenance warning'		=>	'<strong>注意! %s が有効になりました。</strong> ログインできなくなるので、今ログアウトしないでください。',
'Maintenance mode'			=>	'メンテナンスモード',
'Redirecting'				=>	'リダイレクト中…',	// With space!
'Forwarding info'			=>	'%s %s後に自動的にページ移動します。 ',
'second'					=>	'秒',	// singular
'seconds'					=>	'秒',	// plural
'Click redirect'			=>	'すぐに移動したい場合はここをクリックしてください。ブラウザが自動的に移動しない場合もクリックしてください。',
'Invalid e-mail'			=>	'入力されたEmailが正しくありません。',
'New posts'					=>	'未読の新コメント',	// the link that leads to the first new post
'New posts title'			=>	'最後に訪問したあとに新たに投稿されたトピックを表示',	// the popup text for new posts links
'Active topics'				=>	'最近のコメント',
'Active topics title'		=>	'最近投稿されたトピックを表示',
'Unanswered topics'			=>	'返答待ちトピック',
'Unanswered topics title'	=>	'まだ返答のないトピックを表示',
'Username'					=>	'ユーザー名',
'Registered'				=>	'登録済',
'Write message'				=>	'メッセージを書く:',
'Forum'						=>	'フォーラム',
'Posts'						=>	'投稿',
'Pages'						=>	'ページ',
'Page'						=>	'ページ',
'BBCode'					=>	'BBコード',	// You probably shouldn't change this
'Smilies'					=>	'スマイリー',
'Images'					=>	'画像',
'You may use'				=>	'%sが使えます。',
'and'						=>	'と',
'Image link'				=>	'画像',	// This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'						=>	'さんのコメント',	// For [quote]'s (e.g., User wrote:)
'Code'						=>	'コード',		// For [code]'s
'Forum mailer'				=>	'%s メーラー',	// As in "MyForums Mailer" in the signature of outgoing e-mails
'Write message legend'		=>	'Compose your post',
'Required information'		=>	'必須な情報',
'Reqmark'					=>	'*',
'Required warn'				=>	'太字の項目は記入が必要です。',
'Crumb separator'			=>	' &rarr;&#160;', // The character or text that separates links in breadcrumbs
'Title separator'			=>	' -- ',
'Page separator'			=>	'&#160;', //The character or text that separates page numbers
'Spacer'					=>	'…', // Ellipsis for paginate
'Paging separator'			=>	' ', //The character or text that separates page numbers for page navigation generally
'Previous'					=>	'前へ',
'Next'						=>	'次へ',
'Cancel redirect'			=>	'操作はキャンセルされました。',
'No confirm redirect'		=>	'確認されませんでした。操作はキャンセルされました。',
'Please confirm'			=>	'確認:',
'Help page'					=>	'ヘルプ: %s',
'Re'						=>	'Re:',
'Page info'					=>	'(ページ %1$s of %2$s)',
'Item info single'			=>	'%s: %s',
'Item info plural'			=>	'%s: %s～%s (計%s)', // e.g. Topics [ 10 to 20 of 30 ]
'Info separator'			=>	' ', // e.g. 1 Page | 10 Topics
'Powered by'				=>	'Powered by %s, supported by %s.',
'Maintenance'				=>	'メンテナンス',
'Installed extension'		=>	'公式拡張機能 %s がインストールされました。Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',
'Installed extensions'		=>	'現在インストールされている公式拡張機能 <span id="extensions-used" title="%s">%s</span>。Copyright &copy; 2003&ndash;2012 <a href="http://punbb.informer.com/">PunBB</a>.',


// CSRF confirmation form
'Confirm'					=>	'確認',	// Button
'Confirm action'			=>	'アクションを確認',
'Confirm action head'		=>	'最後のアクション確認するかキャンセルして下さい。',

// Title
'Title'						=>	'タイトル',
'Member'					=>	'メンバー',	// Default title
'Moderator'					=>	'モデレーター',
'Administrator'				=>	'管理者',
'Banned'					=>	'立入禁止',
'Guest'						=>	'ゲスト',

// Stuff for include/parser.php
'BBCode error 1'			=>	'[%1$s] と対になる [/%1$s] が見つかりません。',
'BBCode error 2'			=>	'[%s] タグが空です。',
'BBCode error 3'			=>	'[%2$s] の中で [%1$s] を開くことはできません。',
'BBCode error 4'			=>	'[%s] が開いたままです。',
'BBCode error 5'			=>	'[/%1$s] と対になる [%1$s] が見つかりません。 ',
'BBCode error 6'			=>	'[%s] タグに空の属性セクションがあります。',
'BBCode nested list'		=>	'[list] タグは入れ子にできません。',
'BBCode code problem'		=>	'[code] タグに問題があります。',

// Stuff for the navigator (top of every page)
'Index'						=>	'トップ',
'User list'					=>	'ユーザー一覧',
'Rules'						=>	'規約',
'Search'					=>	'検索',
'Register'					=>	'登録',
'register'					=>	'登録',
'Login'						=>	'ログイン',
'login'						=>	'ログイン',
'Not logged in'				=>	'まだログインしていません。',
'Profile'					=>	'プロフィール',
'Logout'					=>	'ログアウト',
'Logged in as'				=>	'%s ログイン中',
'Admin'						=>	'管理',
'Last visit'				=>	'前回の訪問: %s',
'Mark all as read'			=>	'Mark all topics as read',
'Login nag'					=>	'ログインまたは登録してください。',
'New reports'				=>	'最新の削除/違反報告',

// Alerts
'New alerts'				=>	'最新の警告',
'Maintenance alert'			=>	'<strong>メンテナンスモードが有効です。</strong> <em>ログアウトしないでください。</em> 現在このサイトはメンテナンスモードです。<em>ログアウトしないでください。</em> 再ログインできなくなります。',
'Updates'					=>	'PunBB 更新:',
'Updates failed'			=>	'punbb.informer.comに対する最新版のチェックに失敗しました。サービスが過負荷状態か落ちています。 1,2日たっても治らなかったら、自動チェックから手動に切り替えてください。',
'Updates version n hf'		=>	'新しいPunBB, version %s, が入手可能で、<a href="http://punbb.informer.com/">punbb.informer.com</a>でダウンロードできます。 さらに、ホットフィックスは管理機能の<a href="%s">Manage hotfixes</a>タブから可能です。',
'Updates version'			=>	'新しいPunBB, version %s, が入手可能で、<a href="http://punbb.informer.com/">punbb.informer.com</a>からダウンロード可能です。',
'Updates hf'				=>	'管理機能の<a href="%s">Manage hotfixes</a>タブからホットフィックスできます。',
'Database mismatch'			=>	'必要とされるデータベースのバージョンが合いません。',
'Database mismatch alert'	=>	'データベースは新しいPunBBコードと組み合わせて使われます。バージョンがあわないと、フォーラムが正しく動作しません。最新のPunBBのバージョンへのアップグレードをおすすめします。',

// Stuff for Jump Menu
'Go'						=>	'移動',		// submit button in forum jump
'Jump to'					=>	'フォーラムへ移動:',

// For extern.php RSS feed
'RSS description'			=>	'最新のトピック %s.',
'RSS description topic'		=>	'%s の中の最新の投稿',
'RSS reply'					=>	'Re: ',	// The topic subject will be appended to this string (to signify a reply)

// Accessibility
'Skip to content'			=>	'フォーラムへスキップ',

// Debug information
'Querytime'					=>	'%1$s 秒で生成 (%2$s%% PHP - %3$s%% DB) %4$s クエリ',
'Debug table'				=>	'デバッグ情報',
'Debug summary'				=>	'データベースクエリパフォーマンス',
'Query times'				=>	'時間 (s)',
'Query'						=>	'クエリ',
'Total query time'			=>	'総クエリ時間',

// Error message
'Forum error header'		=> '申し訳ありません。ページをロードできません。',
'Forum error description'	=> 'おそらく一時的なエラーです。再実行してページを再描画してください。再実行中に問題が発生する場合は5～10分後に再確認してください。',
'Forum error location'		=> '%2$s の %1$s 行目でエラーが発生しました。',
'Forum error db reported'	=> 'データベース報告:',
'Forum error db query'		=> '失敗したクエリ:',

// Menu
'Menu admin'		=> '管理メニュー',
'Menu profile'		=> 'プロファイルメニュー',


);
