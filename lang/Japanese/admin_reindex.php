<?php

// Language definitions used in all admin files
$lang_admin_reindex = array(

'Reindex heading'			=>	'インデックスの再構築を行い、検索機能のパフォーマンスを改善します。',
'Rebuild index legend'		=>	'検索インデックスの再構築',
'Reindex info'				=>	'もし、データベースを手動で追加・編集・削除したり、検索機能に問題があったりする場合は、この検索インデックスを再構築して下さい。掲示板をメンテナンスモードにすると最善のパフォーマンスで処理できます。プロセスが終了したら、このページに戻ってきます。再構築中はブラウザのJavaScriptを有効にしておくことを強く勧めます。(終了後の自動リダイレクトのため)',
'Reindex warning'			=>	'<strong>重要 !</strong>　再構築は長い時間がかかり、その間サーバーに負荷もかかります。もし再構築中に強制的に中断する場合は、最後の投稿IDをメモしておいて下さい。再開する場合にID+1を入力して処理を続けられます。',
'Empty index warning'		=>	'<strong>注意 !</strong>　もし中断された再構築を再開したい場合は、"インデックスを消去"を選択しないで下さい。',
'Posts per cycle'			=>	'サイクルあたりの投稿数',
'Posts per cycle info'		=>	'ページビューごとの投稿数。もし100と入力すると、100個の投稿の再構築ごとにページが更新されます。これは時間のかかる再構築処理中に接続がタイムアウトしてしまうことを防ぐためです。',
'Starting post'				=>	'開始投稿ID',
'Starting post info'		=>	'再構築を始める投稿ID。デフォルトではデータベース内の最初の投稿IDになっています。通常はここを変更する必要はありません。',
'Empty index'			=>	'再構築の前にインデックスを消去します。(下記参照)',
'Rebuilding index title'	=>	'再構築インデックス &#8230;',
'Rebuilding index'			=>	'再構築インデックス &#8230; お茶でも飲んで一息入れてはどうでしょう？ :-)',
'Processing post'			=>	'トピック: <strong>%s</strong> の投稿ID: <strong>%s</strong> を処理中',
'Javascript redirect'		=>	'JavaScriptによるリダイレクトに失敗しました。',
'Click to continue'			=>	'続けるにはここをクリック',
'Rebuild index'				=>	'インデックス再構築',

);