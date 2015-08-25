<?php

$lang_admin_settings = array(

'Settings updated'				=>	'設定が更新されました。',

// Setup section
'Setup personal'				=>	'PunBB設定',
'Setup personal legend'			=>	'PunBBインストール',
'Board description label'		=>	'掲示板の説明',
'Board title label'				=>	'掲示板のタイトル',
'Default style label'			=>	'デフォルトスタイル',
'Setup local'					=>	'地域設定',
'Setup local legend'			=>	'地域設定',
'Default timezone label'		=>	'デフォルトのタイムゾーン',
'DST label'						=>	'夏時間 (1時間早める)',
'Default language label'		=>	'デフォルトの言語',
'Default language help'			=>	'(language pack を削除したら、この設定を修正して下さい。)',
'Time format label'				=>	'時刻表記',
'Date format label'				=>	'日付表記',
'Current format'				=>	'[ 現在のフォーマット: %s ] %s',
'External format help'			=>	'フォーマットに関しては<a class="exthelp" href="http://www.php.net/manual/en/function.date.php">ここ</a>を参照してください。',
'Setup timeouts'				=>	'タイムアウトやリダイレクト待ち時間',
'Setup timeouts legend'			=>	'デフォルトのタイムアウト',
'Visit timeout label'			=>	'訪問タイムアウト',
'Visit timeout help'			=>	'ログアウトさせられるまでの秒数',
'Online timeout label'			=>	'オンラインタイムアウト',
'Online timeout help'			=>	'オンラインユーザーリストから削除されるまでの秒数',
'Redirect time label'			=>	'リダイレクト待ち時間',
'Redirect time help'			=>	'0秒に設定するとリダイレクトページは表示されません',
'Setup pagination'				=>	'トピックや投稿、投稿のレビューのページ送りに関するデフォルト設定',
'Setup pagination legend'		=>	'ページ送り設定',
'Topics per page label'			=>	'ページあたりのトピック数',
'Posts per page label'			=>	'ページあたりの投稿数',
'Topic review label'			=>	'トピックレビュー',
'Topic review help'				=>	'新しいものから並べる。0で並び替え無し',
'Setup reports'					=>	'投稿とトピックに関する通報の受け取り方法',
'Setup reports legend'			=>	'通報の受信',
'Reporting method'				=>	'通報方法',
'Report internal label'			=>	'内部通報システム',
'Report both label'				=>	'内部通報システムとメールによる通報',
'Report email label'			=>	'メールによる通報のみ',
'Setup URL'						=>	'URLの形式 (<abbr title ="Search Engine Friendly">SEF</abbr> URLs)',
'Setup URL legend'				=>	'形式の選択',
'URL scheme info'				=>	'<strong>警告!</strong> デフォルト以外の形式を選択した場合、<em>.htaccess.dist</em> をコピーするか名前を変更して <em>.htaccess</em> を掲示板のルートディレクトリに配置して下さい。掲示板を動かしているサーバーは mod_rewrite が有効になっていて <em>.htaccess</em> ファイルが使える必要があります。Apache以外のサーバーの場合は、それぞれのサーバーのドキュメントを参照して下さい。',
'URL scheme label'				=>	'URL形式',
'URL scheme help'				=>	'必ず上記を読んで理解してから変更して下さい。',
'Setup links'					=>	'ナビゲーションメニューにカスタムリンクを追加',
'Setup links info'				=>	'このテキストボックスにHTMLのハイパーリンクを入力することで、ページの上部メニューバーに任意のリンクを配置できます。リンク追加のフォーマットは、 X = &lt;a href="URL"&gt;LINK&lt;/a&gt; で、Xには挿入する位置を数字で入力します (0 = ... とすると最初に挿入され、2 = ... とすると、"ユーザー一覧" の後に挿入されます)。改行で区切ってください。',
'Setup links legend'			=>	'メニュー項目',
'Enter links label'				=>	'リンクを入力',
'Error no board title'			=>	'掲示板のタイトルが必要です。',
'Error timeout value'			=>	'"オンラインタイムアウト"は"タイムアウト"よりも短くなければいけません。',


// Features section
'Features general'				=>	'一般的なPunBBの機能の設定',
'Features general legend'		=>	'一般機能',
'Searching'						=>	'検索',
'Search all label'				=>	'ユーザーが一度にすべてのフォーラムを検索できるようにします。過剰な検索で負荷がかかる場合は無効にして下さい。',
'User ranks'					=>	'ユーザーランク',
'User ranks label'				=>	'投稿数でユーザーをランク付けします。',
'Censor words'					=>	'検閲',
'Censor words label'			=>	'特定単語の検閲を有効にします。',
'Quick jump'					=>	'クイックジャンプメニュー',
'Quick jump label'				=>	'各フォーラムへすぐにジャンプできるようにセレクタを表示します。',
'Show version'					=>	'バージョンの表示',
'Show version label'			=>	'フッターにPunBBのバージョンを表示します。',
'Show moderators'				=>	'モデレータの表示',
'Show moderators label'			=>	'インデックスページにモデレータ一覧を表示します。',
'Online list'					=>	'オンラインユーザー一覧',
'Users online label'			=>	'オンライン状態のゲストと登録ユーザーを表示します。',
'Features posting'				=>	'トピックや投稿の機能',
'Features posting legend'		=>	'投稿',
'Quick post'					=>	'クィック投稿',
'Quick post label'				=>	'トピック下部にクィック投稿するフォームを追加します。',
'Subscriptions'					=>	'購読',
'Subscriptions label'			=>	'トピックの購読を許可します (誰かが返答したらメールを受け取ります)。',
'Guest posting'					=>	'ゲスト投稿',
'Guest posting label'			=>	'ゲストは投稿時にメールアドレスを入力する必要があります。',
'User has posted'				=>	'投稿済み',
'User has posted label'			=>	'以前に投稿したことがあるトピックの前に点を表示します。サーバーに負荷がかかる場合は無効にできます。',
'Topic views'					=>	'トピックのビュー',
'Topic views label'				=>	'トピックがいくつのビューをもつか追跡します。サーバーに負荷がかかる場合は無効にして下さい。',
'User post count'				=>	'投稿数表示',
'User post count label'			=>	'ユーザーが投稿した数を投稿記事とプロフィールとユーザー一覧に表示します。',
'User info'						=>	'記事内のユーザー情報',
'User info label'				=>	'投稿記事に投稿者の地域、登録日、投稿数、メールアドレス、URLを表示します。',
'Features posts'				=>	'トピックや投稿の内容',
'Features posts legend'			=>	'トピックや投稿内容のオプション',
'Post content group'			=>	'メッセージオプション',
'Allow BBCode label'			=>	'投稿記事中の BBCode を許可します (推奨)。',
'Allow img label'				=>	'投稿記事中の BBCode の [img] タグを許可します。',
'Smilies in posts label'		=>	'投稿記事中のスマイリーをアイコンに変換します。',
'Make clickable links label'	=>	'BBCode パーサーが URL を検出して [url] タグを自動付加することを許可します。',
'Allow capitals group'			=>	'すべて大文字を許可',
'All caps message label'		=>	'大文字のみのメッセージを許可します。',
'All caps subject label'		=>	'大文字のみのタイトルを許可します。',
'Indent size label'				=>	'[code] タグのインデント幅',
'Indent size help'				=>	'指定した文字数の空白でインデントします。8に設定するとタブが使用されます。',
'Quote depth label'				=>	'[quote] の最大深さ',
'Quote depth help'				=>	'[quote] タグの中にさらに [quote] で引用できる最大深さを指定します。それ以上の深さは無視されます。',
'Features sigs'					=>	'署名と署名内容',
'Features sigs legend'			=>	'署名オプション',
'Allow signatures'				=>	'署名を許可',
'Allow signatures label'		=>	'投稿に署名を付け加えることを許可します。',
'Signature content group'		=>	'署名の内容',
'BBCode in sigs label'			=>	'署名内の BBCode を許可します。',
'Img in sigs label'				=>	'署名内の BBCode [img] タグを許可します (非推奨)。',
'All caps sigs label'			=>	'大文字のみの署名を許可します。',
'Smilies in sigs label'			=>	'署名内のスマイリーをアイコンに変換します。',
'Max sig length label'			=>	'最大文字数',
'Max sig lines label'			=>	'最大行数',
'Features Avatars'				=>	'アバター (アップロードやサイズの設定)',
'Features Avatars legend'		=>	'ユーザーアバター設定',
'Allow avatars'					=>	'アバターを許可',
'Allow avatars label'			=>	'投稿記事に表示するアバターをアップロードすることを許可します。',
'Avatar directory label'		=>	'アップロードディレクトリ',
'Avatar directory help'			=>	'PunBB のルートディレクトリからの相対パスです。PHP の書き込み許可を与えておく必要があります。',
'Avatar Max width label'		=>	'最大幅',
'Avatar Max width help'			=>	'ピクセル (60 が推奨値)',
'Avatar Max height label'		=>	'最大高さ',
'Avatar Max height help'		=>	'ピクセル (60 が推奨値)',
'Avatar Max size label'			=>	'最大サイズ',
'Avatar Max size help'			=>	'バイト (15,360 が推奨値)',
'Features update'				=>	'自動更新',
'Features update info'			=>	'PunBB は重要なアップデートがあるかどうかを定期的にチェックすることができます。アップデートは新しいバージョンのリリースであることも hotfix であることもあります。アップデートが可能な場合は管理者画面に警告が表示されます。',
'Features update disabled info'	=>	'自動更新をすることができません。この機能を使うには、PunBBを動かしているPHP環境が<a href="http://www.php.net/manual/en/ref.curl.php">cURL extension</a>, <a href="http://www.php.net/manual/en/function.fsockopen.php">fsockopen() function</a>がサポートされているか、<a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen">allow_url_fopen</a>が有効になっている必要があります。',
'Features update legend'		=>	'自動更新',
'Update check'					=>	'アップデートをチェック',
'Update check label'			=>	'自動的に行われるアップデートの確認を有効にします。',
'Check for versions'			=>	'新しいバージョンをチェック',
'Auto check for versions'		=>	'拡張機能の新バージョン確認を有効にします。',

'Features mask passwords'			=>	'入力欄のパスワード非表示',
'Features mask passwords legend'	=>	'パスワード非表示',
'Features mask passwords info'		=>	'有効にした場合、PunBB はすべてのパスワード欄とパスワード確認欄の文字を隠します。無効にした場合は、パスワードの登録や変更するとき以外でもパスワード欄の文字は表示されることになります。ログインフォームのパスワード欄の文字は (このオプションにかかわらず) 常に隠されます。',
'Enable mask passwords'				=>	'パスワード非表示',
'Enable mask passwords label'		=>	'入力欄のパスワードを非表示にします。',

'Features gzip'					=>	'gzip を用いた出力の圧縮',
'Features gzip legend'			=>	'出力の圧縮',
'Features gzip info'			=>	'有効にすると、PunBB はブラウザに gzip 圧縮したデータを送ります。これにより通信量が軽減されますが、CPU 負荷がを少し上がります。この機能は PHP に zlib が必要です (--with-zlib)。注: すでに Apache の mod_gzip や mod_deflate モジュールで PHP スクリプトの出力を圧縮するように設定しているのなら、この項目は無効にして下さい。',
'Enable gzip'					=>	'gzip圧縮',
'Enable gzip label'				=>	'gzip を用いた出力の圧縮を有効にします。',

// Announcements section
'Announcements head'			=>	'掲示板のすべてのページにアナウンスを表示する。',
'Announcements legend'			=>	'アナウンス',
'Enable announcement'			=>	'アナウンスを表示',
'Enable announcement label'		=>	'アナウンスを表示します。',
'Announcement heading label'	=>	'アナウンスのタイトル',
'Announcement message label'	=>	'アナウンスの内容',
'Announcement message help'		=>	'文章中に HTML を使えます。アナウンスは投稿記事のようにはパースされません。',
'Announcement message default'	=>	'<p>ここにアナウンスの内容を入力します。</p>',

// Registration section
'Registration new'				=>	'新規登録',
'New reg info'					=>	'すべての新規登録を検証するようにできます。登録の検証機能を有効にすると、ユーザーは登録時にアクティベーションリンクをメールで受け取ります。受け取ったユーザーはそのリンクのページからパスワードを入力してログインすることができます。この機能は、ユーザーが登録したメールアドレスを変更する際にも、新しいメールアドレスが正しいことを検証します。この機能は、登録の乱用を避けたり、すべてのユーザーがプロフィールに "正しい" メールアドレスを設定していることを保証するのに有効です。',
'Registration new legend'		=>	'新規登録設定',
'Allow new reg'					=>	'新規登録を許可',
'Allow new reg label'			=>	'ユーザーが新規登録できるようにします。特別な状況下にだけ無効にして下さい。',
'Verify reg'					=>	'登録の検証',
'Verify reg label'				=>	'すべての新規登録についてメールによる検証が必要となります。',
'Reg e-mail group'				=>	'登録メール',
'Allow banned label'			=>	'禁止されたメールアドレスからの登録を許可します。',
'Allow dupe label'				=>	'重複するメールアドレスによる登録を許可します。',
'Report new reg'				=>	'メールによる通知',
'Report new reg label'			=>	'新規ユーザが登録する際にメーリングリスト上のユーザーに通知を行います。',
'E-mail setting group'			=>	'デフォルトのメール設定',
'Display e-mail label'			=>	'他のユーザーにメールアドレスを公開します。',
'Allow form e-mail label'		=>	'メールアドレスを隠しますが、フォーラム経由でのをメールを許可します。',
'Disallow form e-mail label'	=>	'メールアドレスを隠し、フォーラム経由でのメールも許可しません。',
'Registration rules'			=>	'フォーラムの規約 (規約の有効化と作成)',
'Registration rules info'		=>	'新規ユーザーが登録する際に、規約への同意を求めることができます。この規約は、各ページの上部にあるナビゲーションメニュー内のリンクからいつでも有効にすることができます。規約の使用を有効にし、下記の規約を作成することができます。',
'Registration rules legend'		=>	'フォーラム規約',
'Require rules'					=>	'規約の使用',
'Require rules label'			=>	'ユーザーは登録前にこの規約に同意する必要があります。',
'Compose rules label'			=>	'規約の作成',
'Compose rules help'			=>	'テキストとして HTML を使用できますが、パースはされません。',
'Rules default'					=>	'規約をここに入力して下さい。',

// Email section
'E-mail addresses'				=>	'フォーラムのメールアドレスとメーリングリスト',
'E-mail addresses legend'		=>	'メールアドレス',
'Admin e-mail'					=>	'管理者のメールアドレス',
'Webmaster e-mail label'		=>	'ウェブマスターのメールアドレス',
'Webmaster e-mail help'			=>	'フォーラムから送信されるメールの "From" アドレス',
'Mailing list label'			=>	'メーリングリストの作成',
'Mailing list help'				=>	'通報や新規ユーザー登録通知を受け取るメールアドレスをカンマで区切って列挙して下さい。',
'E-mail server'					=>	'フォーラムからメールを送る際のメールサーバー設定',
'E-mail server legend'			=>	'メールサーバー',
'E-mail server info'			=>	'ほとんどの場合、次の設定を無視しても PunBB はローカルのプログラムを使ってメールを送信できます。PunBB は外部のメールサーバーを使うように設定することができます。外部メールサーバーのアドレスを入力し、必要であれば、SMTP のポートがデフォルトの25番でないようならポート番号を指定してください (例: mail.example.com:3580)。',
'SMTP address label'			=>	'SMTP サーバーのアドレス',
'SMTP address help'				=>	'外部サーバー用です。ローカルサーバーを使う場合は空欄のままにして下さい。',
'SMTP username label'			=>	'SMTP サーバーのユーザー',
'SMTP username help'			=>	'ほとんどの SMTP サーバーでは要求されません。',
'SMTP password label'			=>	'SMTP サーバーのパスワード',
'SMTP password help'			=>	'ほとんどの SMTP サーバーでは要求されません。',
'SMTP SSL'						=>	'SSL による暗号化',
'SMTP SSL label'				=>	'PHP が SSL をサポートしていて、かつ SMTP サーバが SSL を要求する場合です。',
'Error invalid admin e-mail'	=>	'管理者のメールアドレスが正しくありません。',
'Error invalid web e-mail'		=>	'ウェブマスターのメールアドレスが正しくありません。',

// Maintenance section
'Maintenance head'				=>	'メンテナンスモードのメッセージ設定と、メンテナンスモードへの切り替え',
'Maintenance mode info'			=>	'<strong>重要 !</strong>　掲示板をメンテナンスモードにすることは、管理者のみアクセスできるように成るということです。メンテンナンスのために掲示板を一時的に「落とす」場合にこのモードを使います。',
'Maintenance mode warn'			=>	'<strong>注意 !</strong>　メンテナンスモード時にログアウトしてはいけません！ 二度とログインできなくなります。',
'Maintenance legend'			=>	'メンテナンス',
'Maintenance mode'				=>	'メンテナンスモード',
'Maintenance mode label'		=>	'掲示板をメンテナンスモードにする',
'Maintenance message label'		=>	'メンテナンスメッセージ',
'Maintenance message help'		=>	'このメッセージは掲示板がメンテンナンスモードに入っているときに表示されます。メッセージにHTMLを使えます。',
'Maintenance message default'	=>	'このフォーラムはメンテナンスのために一時的に停止しています。2,3分たってからまた試してください。<br /><br />管理者',

);
