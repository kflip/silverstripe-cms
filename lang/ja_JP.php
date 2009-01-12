<?php

/**
 * Japanese (Japan) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('ja_JP', $lang) && is_array($lang['ja_JP'])) {
	$lang['ja_JP'] = array_merge($lang['en_US'], $lang['ja_JP']);
} else {
	$lang['ja_JP'] = $lang['en_US'];
}

$lang['ja_JP']['AssetAdmin']['CHOOSEFILE'] = 'ファイルを選択';
$lang['ja_JP']['AssetAdmin']['CONTENTMODBY'] = 'コンテンツは修正可能です。';
$lang['ja_JP']['AssetAdmin']['CONTENTUSABLEBY'] = 'コンテンツは使用可能です。';
$lang['ja_JP']['AssetAdmin']['DELETEDX'] = ' %sファイルを消去してください。';
$lang['ja_JP']['AssetAdmin']['FILESREADY'] = '送信待ちのファイル';
$lang['ja_JP']['AssetAdmin']['FOLDERDELETED'] = 'フォルダを削除しました。';
$lang['ja_JP']['AssetAdmin']['FOLDERSDELETED'] = 'フォルダを削除しました。.';
$lang['ja_JP']['AssetAdmin']['MENUTITLE'] = 'ファイルと画像';
$lang['ja_JP']['AssetAdmin']['MOVEDX'] = ' %sファイルを移動しました。';
$lang['ja_JP']['AssetAdmin']['NEWFOLDER'] = '新規フォルダ';
$lang['ja_JP']['AssetAdmin']['NOTEMP'] = 'アップロードするためのフォルダがありません。php.iniにupload_tmp_dirを設定してください。';
$lang['ja_JP']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'アップロードされていません';
$lang['ja_JP']['AssetAdmin']['NOWBROKEN'] = 'この先のページには進めません。:';
$lang['ja_JP']['AssetAdmin']['NOWBROKEN2'] = '所有者は、Eメールとそれらのページを用意することができます。';
$lang['ja_JP']['AssetAdmin']['OWNER'] = 'オーナー';
$lang['ja_JP']['AssetAdmin']['SAVEDFILE'] = ' %sは保存されました。';
$lang['ja_JP']['AssetAdmin']['SAVEFOLDERNAME'] = '保存するフォルダ名';
$lang['ja_JP']['AssetAdmin']['THUMBSDELETED'] = 'すべての未使用のサムネイルは、消去されました。';
$lang['ja_JP']['AssetAdmin']['UPLOAD'] = '以下のファイルをアップしてください。';
$lang['ja_JP']['AssetAdmin']['UPLOADEDX'] = '%S 個のファイルをアップロードしました';
$lang['ja_JP']['AssetAdmin_left.ss']['CREATE'] = '作成';
$lang['ja_JP']['AssetAdmin_left.ss']['DELETE'] = '削除';
$lang['ja_JP']['AssetAdmin_left.ss']['DELFOLDERS'] = '選択したフォルダを削除します';
$lang['ja_JP']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'ドラッグ &amp; ドロップを有効にする';
$lang['ja_JP']['AssetAdmin_left.ss']['FOLDERS'] = 'フォルダ';
$lang['ja_JP']['AssetAdmin_left.ss']['GO'] = 'GO';
$lang['ja_JP']['AssetAdmin_left.ss']['SELECTTODEL'] = '削除したいフォルダを選択して、ボタンを押してください。';
$lang['ja_JP']['AssetAdmin_left.ss']['TOREORG'] = 'フォルダーを再編成する為に,希望するものをドラッグして囲って下さい';
$lang['ja_JP']['AssetAdmin_right.ss']['CHOOSEPAGE'] = '左からページを選択してください。';
$lang['ja_JP']['AssetAdmin_right.ss']['WELCOME'] = 'ようこそ';
$lang['ja_JP']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'このフォルダにアップロードする権限がありません。';
$lang['ja_JP']['AssetTableField']['CAPTION'] = 'キャンプ所ん';
$lang['ja_JP']['AssetTableField']['CREATED'] = '最初のアップロード';
$lang['ja_JP']['AssetTableField']['DIM'] = '容量';
$lang['ja_JP']['AssetTableField']['DIMLIMT'] = 'ポップアップウインドウのサイズを制限してください。';
$lang['ja_JP']['AssetTableField']['EDITIMAGE'] = 'この画像を編集してください。';
$lang['ja_JP']['AssetTableField']['FILENAME'] = 'ファイル名';
$lang['ja_JP']['AssetTableField']['GALLERYOPTIONS'] = 'ギャラリー オプション';
$lang['ja_JP']['AssetTableField']['IMAGE'] = '画像';
$lang['ja_JP']['AssetTableField']['ISFLASH'] = 'フラッシュです';
$lang['ja_JP']['AssetTableField']['LASTEDIT'] = '最後のアップロード';
$lang['ja_JP']['AssetTableField']['MAIN'] = 'メイン';
$lang['ja_JP']['AssetTableField']['NOLINKS'] = 'このファイルはどのページからもリンクされていません。';
$lang['ja_JP']['AssetTableField']['OWNER'] = 'オーナー';
$lang['ja_JP']['AssetTableField']['PAGESLINKING'] = '次のページはこのファイルとリンクしています。';
$lang['ja_JP']['AssetTableField']['POPUPHEIGHT'] = 'ホップアップの高さ';
$lang['ja_JP']['AssetTableField']['POPUPWIDTH'] = 'ポップアップの幅';
$lang['ja_JP']['AssetTableField']['SIZE'] = 'サイズ';
$lang['ja_JP']['AssetTableField.ss']['DELFILE'] = 'このファイルを削除します';
$lang['ja_JP']['AssetTableField.ss']['DRAGTOFOLDER'] = '移動したいファイルを移動先にドラッグしてください';
$lang['ja_JP']['AssetTableField.ss']['EDIT'] = 'アセットの編集';
$lang['ja_JP']['AssetTableField.ss']['SHOW'] = 'アセットの閲覧';
$lang['ja_JP']['AssetTableField']['SWFFILEOPTIONS'] = 'SWFファイルのオプション';
$lang['ja_JP']['AssetTableField']['TITLE'] = 'タイトル';
$lang['ja_JP']['AssetTableField']['TYPE'] = 'タイプ';
$lang['ja_JP']['AssetTableField']['URL'] = 'URL';
$lang['ja_JP']['CMSLeft.ss']['DELPAGE'] = 'ページ削除';
$lang['ja_JP']['CMSLeft.ss']['DELPAGES'] = '選択されたページを削除します';
$lang['ja_JP']['CMSLeft.ss']['GO'] = 'Go';
$lang['ja_JP']['CMSLeft.ss']['NEWPAGE'] = '新しいページ';
$lang['ja_JP']['CMSLeft.ss']['SELECTPAGESDEL'] = '削除したいページを選択し、ボタンをクリックしてください';
$lang['ja_JP']['CMSLeft.ss']['SITECONT'] = 'サイトコンテンツ';
$lang['ja_JP']['CMSMain']['ACCESS'] = ' %s にあるCMSにアクセスします';
$lang['ja_JP']['CMSMain']['CANCEL'] = 'キャンセル';
$lang['ja_JP']['CMSMain']['CHOOSEREPORT'] = '(レポートを選択)';
$lang['ja_JP']['CMSMain']['COMPARINGV'] = '#%d と #%d を比較しています';
$lang['ja_JP']['CMSMain']['COPYPUBTOSTAGE'] = 'ステージサイトに公開された内容をコピーしますか？';
$lang['ja_JP']['CMSMain']['DELETE'] = 'ドラフトサイトから削除';
$lang['ja_JP']['CMSMain']['DELETEFP'] = '公開サイトから削除する';
$lang['ja_JP']['CMSMain']['DESCREMOVED'] = ' %s 由来';
$lang['ja_JP']['CMSMain']['EMAIL'] = 'メール';
$lang['ja_JP']['CMSMain']['GO'] = '実行';
$lang['ja_JP']['CMSMain']['MENUTITLE'] = 'サイトコンテンツ';
$lang['ja_JP']['CMSMain']['METADESCOPT'] = '説明';
$lang['ja_JP']['CMSMain']['METAKEYWORDSOPT'] = 'キーワード';
$lang['ja_JP']['CMSMain']['NEW'] = '新規';
$lang['ja_JP']['CMSMain']['NOCONTENT'] = 'コンテンツがありません';
$lang['ja_JP']['CMSMain']['NOTHINGASSIGNED'] = 'あなたには割り当てがありません';
$lang['ja_JP']['CMSMain']['NOWAITINGON'] = '承認待ちはありません';
$lang['ja_JP']['CMSMain']['NOWBROKEN'] = '次のページには不明なリンクがあります。';
$lang['ja_JP']['CMSMain']['NOWBROKEN2'] = 'オーナーへページの修正依頼のメールを送信しました';
$lang['ja_JP']['CMSMain']['OK'] = 'ＯＫ';
$lang['ja_JP']['CMSMain']['PAGEDEL'] = '%dページ削除しました';
$lang['ja_JP']['CMSMain']['PAGENOTEXISTS'] = 'ページが見つかりません';
$lang['ja_JP']['CMSMain']['PAGEPUB'] = '%d は公開されました';
$lang['ja_JP']['CMSMain']['PAGESDEL'] = '%dページ削除しました';
$lang['ja_JP']['CMSMain']['PAGESPUB'] = '%d は公開されました';
$lang['ja_JP']['CMSMain']['PAGETYPEOPT'] = 'ページタイプ';
$lang['ja_JP']['CMSMain']['PRINT'] = '印刷';
$lang['ja_JP']['CMSMain']['PUBALLCONFIRM'] = 'サイトにある全ての公開されたページに内容を有効化させる為にコピーします';
$lang['ja_JP']['CMSMain']['PUBALLFUN'] = '"すべて公開" 機能';
$lang['ja_JP']['CMSMain']['PUBALLFUN2'] = 'このボタンを押すと、全てのページに対して"公開"を押したことになります。 サイト構築開始時等、大規模な編集があった後に使用してください。';
$lang['ja_JP']['CMSMain']['PUBPAGES'] = '完了: %d を公開に設定しました';
$lang['ja_JP']['CMSMain']['REMOVED'] = '有効なサイトから \'%s\'%s を削除してください。';
$lang['ja_JP']['CMSMain']['REMOVEDFD'] = '下書きのサイトから取り除く';
$lang['ja_JP']['CMSMain']['REMOVEDPAGE'] = '公開サイトから%Sを取り除きました';
$lang['ja_JP']['CMSMain']['REPORT'] = 'レポート';
$lang['ja_JP']['CMSMain']['RESTORE'] = 'リストア';
$lang['ja_JP']['CMSMain']['RESTORED'] = '\'%s\' のリストアを行いました';
$lang['ja_JP']['CMSMain']['ROLLBACK'] = 'このバージョンに戻す';
$lang['ja_JP']['CMSMain']['ROLLEDBACKPUB'] = '公開バージョンを戻しました。新しいバージョンは #%d です。';
$lang['ja_JP']['CMSMain']['ROLLEDBACKVERSION'] = 'バージョン #%d に戻す。　新しいバージョンは #%d です。';
$lang['ja_JP']['CMSMain']['SAVE'] = '保存';
$lang['ja_JP']['CMSMain']['SENTTO'] = '承認へ  %s %s を送信しました';
$lang['ja_JP']['CMSMain']['STATUSOPT'] = 'ステータス';
$lang['ja_JP']['CMSMain']['TOTALPAGES'] = 'ページ合計:';
$lang['ja_JP']['CMSMain']['VERSIONSNOPAGE'] = '#%dページが見つかりません';
$lang['ja_JP']['CMSMain']['VIEWING'] = '現在表示中のバージョンは、#%d で、%sに作成されました';
$lang['ja_JP']['CMSMain']['VISITRESTORE'] = 'visit restorepage/(ID)';
$lang['ja_JP']['CMSMain']['WAITINGON'] = '他の人が扱っているこれらの<b>%d(</b>)ページを待っています';
$lang['ja_JP']['CMSMain']['WORKTODO'] = '<b>%d</b>ページにやりのこしがあります';
$lang['ja_JP']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'ボタンの名前がありません';
$lang['ja_JP']['CMSMain_dialog.ss']['NOLINKED'] = 'window.linkedObjectが見つかりません 送信ボタンを押してメインウィンドウに戻ってください';
$lang['ja_JP']['CMSMain_left.ss']['ADDEDNOTPUB'] = '下書きに保存しましたが、まだ公開されていません。';
$lang['ja_JP']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = '基準の追加...';
$lang['ja_JP']['CMSMain_left.ss']['BATCHACTIONS'] = 'バッチ処理';
$lang['ja_JP']['CMSMain_left.ss']['CHANGED'] = '変更しました';
$lang['ja_JP']['CMSMain_left.ss']['CLOSEBOX'] = 'クリックでボックスを閉じます';
$lang['ja_JP']['CMSMain_left.ss']['COMMENTS'] = 'コメント';
$lang['ja_JP']['CMSMain_left.ss']['COMPAREMODE'] = '比較モード(比較する２をクリック)';
$lang['ja_JP']['CMSMain_left.ss']['CREATE'] = '作成';
$lang['ja_JP']['CMSMain_left.ss']['DEL'] = '削除しました';
$lang['ja_JP']['CMSMain_left.ss']['DELETECONFIRM'] = '選択したページを削除';
$lang['ja_JP']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = '草稿サイトから削除されますが、まだ有効なサイトです';
$lang['ja_JP']['CMSMain_left.ss']['EDITEDNOTPUB'] = '下書きを編集しましたが、まだ公開されていません。';
$lang['ja_JP']['CMSMain_left.ss']['EDITEDSINCE'] = '編集に続いて';
$lang['ja_JP']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'ドラッグ &amp; ドロップを有効にする';
$lang['ja_JP']['CMSMain_left.ss']['GO'] = '実行';
$lang['ja_JP']['CMSMain_left.ss']['KEY'] = '値 :';
$lang['ja_JP']['CMSMain_left.ss']['NEW'] = '新しい';
$lang['ja_JP']['CMSMain_left.ss']['OPENBOX'] = 'クリックでボックスを開きます';
$lang['ja_JP']['CMSMain_left.ss']['PAGEVERSIONH'] = 'ページ変更履歴';
$lang['ja_JP']['CMSMain_left.ss']['PUBLISHCONFIRM'] = '選択されたページを公開';
$lang['ja_JP']['CMSMain_left.ss']['SEARCH'] = '検索';
$lang['ja_JP']['CMSMain_left.ss']['SEARCHTITLE'] = 'URLの検索, タイトル, メインタイトル, &amp; 内容';
$lang['ja_JP']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = '変更したいページを選んで &amp; クリックしてください:';
$lang['ja_JP']['CMSMain_left.ss']['SELECTPAGESDUP'] = '複製したいページを選んで, 子供が含まれるべきかどうか, あと、どの部分を複製したいか';
$lang['ja_JP']['CMSMain_left.ss']['SHOWONLYCHANGED'] = '変更されたページのみ閲覧';
$lang['ja_JP']['CMSMain_left.ss']['SHOWUNPUB'] = '非公開のものを表示';
$lang['ja_JP']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'サイト内容と構造';
$lang['ja_JP']['CMSMain_left.ss']['SITEREPORTS'] = 'サイトレポート';
$lang['ja_JP']['CMSMain_left.ss']['TASKLIST'] = 'タスクリスト';
$lang['ja_JP']['CMSMain_left.ss']['WAITINGON'] = '処理待ち';
$lang['ja_JP']['CMSMain_right.ss']['ANYMESSAGE'] = 'エディターにメッセージを送りますか？';
$lang['ja_JP']['CMSMain_right.ss']['CHOOSEPAGE'] = '左側からページを選択してください';
$lang['ja_JP']['CMSMain_right.ss']['LOADING'] = '読み込み中...';
$lang['ja_JP']['CMSMain_right.ss']['MESSAGE'] = 'メッセージ';
$lang['ja_JP']['CMSMain_right.ss']['SENDTO'] = '送信する';
$lang['ja_JP']['CMSMain_right.ss']['STATUS'] = 'ステータス';
$lang['ja_JP']['CMSMain_right.ss']['SUBMIT'] = '承認する';
$lang['ja_JP']['CMSMain_right.ss']['WELCOMETO'] = 'ようこそ';
$lang['ja_JP']['CMSMain_versions.ss']['AUTHOR'] = '作者';
$lang['ja_JP']['CMSMain_versions.ss']['NOTPUB'] = '非公開';
$lang['ja_JP']['CMSMain_versions.ss']['PUBR'] = '投稿者';
$lang['ja_JP']['CMSMain_versions.ss']['UNKNOWN'] = '不明';
$lang['ja_JP']['CMSMain_versions.ss']['WHEN'] = 'いつ';
$lang['ja_JP']['CMSRight.ss']['CHOOSEPAGE'] = '左側のメニューからページを選択しってください';
$lang['ja_JP']['CMSRight.ss']['ECONTENT'] = 'コンテンツ編集';
$lang['ja_JP']['CMSRight.ss']['WELCOMETO'] = 'ようこそ';
$lang['ja_JP']['CommentAdmin']['ACCEPT'] = '承認';
$lang['ja_JP']['CommentAdmin']['APPROVED'] = ' %s のコメントを受け入れる';
$lang['ja_JP']['CommentAdmin']['APPROVEDCOMMENTS'] = '承認されたコメント';
$lang['ja_JP']['CommentAdmin']['AUTHOR'] = '著者';
$lang['ja_JP']['CommentAdmin']['COMMENT'] = 'コメント';
$lang['ja_JP']['CommentAdmin']['COMMENTS'] = 'コメント';
$lang['ja_JP']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = '承認待ちのコメント';
$lang['ja_JP']['CommentAdmin']['DATEPOSTED'] = '投稿日';
$lang['ja_JP']['CommentAdmin']['DELETE'] = '削除';
$lang['ja_JP']['CommentAdmin']['DELETEALL'] = 'すべて削除';
$lang['ja_JP']['CommentAdmin']['DELETED'] = ' %s のコメントを削除.';
$lang['ja_JP']['CommentAdmin']['MARKASNOTSPAM'] = '迷惑メールではないとしてマーク';
$lang['ja_JP']['CommentAdmin']['MARKEDNOTSPAM'] = ' %s のコメントを迷惑メールではないとしてマーク';
$lang['ja_JP']['CommentAdmin']['MARKEDSPAM'] = ' %s のコメントを迷惑メールとしてマーク';
$lang['ja_JP']['CommentAdmin']['MENUTITLE'] = 'コメント';
$lang['ja_JP']['CommentAdmin']['NAME'] = '名前';
$lang['ja_JP']['CommentAdmin']['PAGE'] = 'ページ';
$lang['ja_JP']['CommentAdmin']['SPAM'] = 'スパム';
$lang['ja_JP']['CommentAdmin']['SPAMMARKED'] = 'スパムとマーク';
$lang['ja_JP']['CommentAdmin_left.ss']['COMMENTS'] = 'コメント';
$lang['ja_JP']['CommentAdmin_right.ss']['WELCOME1'] = 'ようこそ ';
$lang['ja_JP']['CommentAdmin_right.ss']['WELCOME2'] = 'コメント管理. 左のツリーからフォルダーを選択してください';
$lang['ja_JP']['CommentAdmin_SiteTree.ss']['APPROVED'] = '承認する';
$lang['ja_JP']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = '承認待ち';
$lang['ja_JP']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'コメント';
$lang['ja_JP']['CommentAdmin_SiteTree.ss']['SPAM'] = 'スパム';
$lang['ja_JP']['CommentList.ss']['CREATEDW'] = 'コメント作成時に \'workflow actions\' が実行されます - 発表, 拒絶, 送信.';
$lang['ja_JP']['CommentList.ss']['NOCOM'] = 'このページにはまだコメントがありません。';
$lang['ja_JP']['CommentTableField']['FILTER'] = 'フィルター';
$lang['ja_JP']['CommentTableField']['SEARCH'] = '検索';
$lang['ja_JP']['CommentTableField.ss']['APPROVE'] = '承認';
$lang['ja_JP']['CommentTableField.ss']['APPROVECOMMENT'] = 'コメントを承認する';
$lang['ja_JP']['CommentTableField.ss']['DELETE'] = '削除';
$lang['ja_JP']['CommentTableField.ss']['DELETEROW'] = 'この行を削除';
$lang['ja_JP']['CommentTableField.ss']['EDIT'] = '編集';
$lang['ja_JP']['CommentTableField.ss']['HAM'] = 'ham';
$lang['ja_JP']['CommentTableField.ss']['MARKASSPAM'] = 'このコメントをスパムとしてマークする';
$lang['ja_JP']['CommentTableField.ss']['MARKNOSPAM'] = 'このコメントをスパムじゃないとマークする';
$lang['ja_JP']['CommentTableField.ss']['NOITEMSFOUND'] = 'アイテムが見つかりません';
$lang['ja_JP']['CommentTableField.ss']['SPAM'] = 'スパム';
$lang['ja_JP']['ComplexTableField']['CLOSEPOPUP'] = 'ポップアップを閉じる';
$lang['ja_JP']['GenericDataAdmin']['CHOOSECRIT'] = '検索条件を選んでから \'Go\' を押してください';
$lang['ja_JP']['GenericDataAdmin']['CREATE'] = '作成';
$lang['ja_JP']['GenericDataAdmin']['DELETE'] = '削除';
$lang['ja_JP']['GenericDataAdmin']['DELETEDSUCCESS'] = '削除しました';
$lang['ja_JP']['GenericDataAdmin']['EXPORTCSV'] = 'CSVファイルにエクスポート';
$lang['ja_JP']['GenericDataAdmin']['FOUND'] = '発見:';
$lang['ja_JP']['GenericDataAdmin']['GO'] = 'へ移動';
$lang['ja_JP']['GenericDataAdmin']['NORESULTS'] = '申し訳ございませんが %s は検索されませんでした';
$lang['ja_JP']['GenericDataAdmin']['SAVE'] = '保存';
$lang['ja_JP']['GenericDataAdmin']['SAVED'] = '保存しました';
$lang['ja_JP']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'リストに追加';
$lang['ja_JP']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'リストの検索';
$lang['ja_JP']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = '検索結果';
$lang['ja_JP']['GenericDataAdmin_right.ss']['WELCOME1'] = 'ようこそ';
$lang['ja_JP']['GenericDataAdmin_right.ss']['WELCOME2'] = '左の枠からエントリーをクリックして選んでください';
$lang['ja_JP']['ImageEditor.ss']['ACTIONS'] = 'アクション';
$lang['ja_JP']['ImageEditor.ss']['APPLY'] = '適用';
$lang['ja_JP']['ImageEditor.ss']['CANCEL'] = 'キャンセル';
$lang['ja_JP']['ImageEditor.ss']['CROP'] = '切り取る';
$lang['ja_JP']['ImageEditor.ss']['CURRENTACTION'] = '傾向&nbsp;アクション';
$lang['ja_JP']['ImageEditor.ss']['EDITFUNCTIONS'] = '編集&nbsp;機能';
$lang['ja_JP']['ImageEditor.ss']['EXIT'] = 'exit';
$lang['ja_JP']['ImageEditor.ss']['HEIGHT'] = '高さ';
$lang['ja_JP']['ImageEditor.ss']['REDO'] = '進む';
$lang['ja_JP']['ImageEditor.ss']['ROT'] = '回転';
$lang['ja_JP']['ImageEditor.ss']['SAVE'] = '画像を保存';
$lang['ja_JP']['ImageEditor.ss']['UNDO'] = 'もどる';
$lang['ja_JP']['ImageEditor.ss']['UNTITLED'] = '名無しの文書';
$lang['ja_JP']['ImageEditor.ss']['WIDTH'] = '幅';
$lang['ja_JP']['LeftAndMain']['CHANGEDURL'] = 'URLを \'%s\' に変更しました';
$lang['ja_JP']['LeftAndMain']['HELP'] = 'ヘルプ';
$lang['ja_JP']['LeftAndMain']['PAGETYPE'] = 'ページタイプ:';
$lang['ja_JP']['LeftAndMain']['PERMAGAIN'] = 'ログアウトしました。 再度ログインしたい場合は、ユーザー名とパスワードを入力してください。';
$lang['ja_JP']['LeftAndMain']['PERMALREADY'] = '恐れ入りますが、アクセスできません。別ユーザーでログインしたい場合は、下記をから。';
$lang['ja_JP']['LeftAndMain']['PERMDEFAULT'] = 'CMSにアクセスするために、Eメールアドレスとパスワードを入力してください。';
$lang['ja_JP']['LeftAndMain']['PLEASESAVE'] = '保存してください: 保存してないため更新できません。';
$lang['ja_JP']['LeftAndMain']['REQUESTERROR'] = 'リクエストエラー';
$lang['ja_JP']['LeftAndMain']['SAVED'] = '保存しました';
$lang['ja_JP']['LeftAndMain']['SAVEDUP'] = '保存しました';
$lang['ja_JP']['LeftAndMain']['SITECONTENTLEFT'] = 'サイト内容';
$lang['ja_JP']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'このページは';
$lang['ja_JP']['LeftAndMain.ss']['APPVERSIONTEXT2'] = '現在はこのバージョンで実行しています それは理論的にCVSの派生です';
$lang['ja_JP']['LeftAndMain.ss']['ARCHS'] = '変更履歴';
$lang['ja_JP']['LeftAndMain.ss']['DRAFTS'] = 'ドラフトサイト';
$lang['ja_JP']['LeftAndMain.ss']['EDIT'] = '編集';
$lang['ja_JP']['LeftAndMain.ss']['EDITINCMS'] = 'CMSで削除';
$lang['ja_JP']['LeftAndMain.ss']['EDITPROFILE'] = 'プロフィール';
$lang['ja_JP']['LeftAndMain.ss']['LOADING'] = '読み込み中...';
$lang['ja_JP']['LeftAndMain.ss']['LOGGEDINAS'] = 'ログイン中';
$lang['ja_JP']['LeftAndMain.ss']['LOGOUT'] = 'ログアウト';
$lang['ja_JP']['LeftAndMain.ss']['PUBLIS'] = '公開サイト';
$lang['ja_JP']['LeftAndMain.ss']['REQUIREJS'] = 'このCMSを使用するためにはJavaScriptの設定を有効にしてください。';
$lang['ja_JP']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe のサイトへ';
$lang['ja_JP']['LeftAndMain.ss']['VIEWINDRAFT'] = 'このページをドラフトサイトで見る';
$lang['ja_JP']['LeftAndMain.ss']['VIEWINPUBLISHED'] = '公開されたサイトからページを閲覧';
$lang['ja_JP']['LeftAndMain.ss']['VIEWPAGEIN'] = 'ページ確認 :';
$lang['ja_JP']['LeftAndMain']['STATUSTO'] = '\'%s\' に変更しました';
$lang['ja_JP']['LeftAndMain']['TREESITECONTENT'] = 'サイト内容';
$lang['ja_JP']['MemberList']['ADD'] = '追加';
$lang['ja_JP']['MemberList']['ANYGROUP'] = 'Any group';
$lang['ja_JP']['MemberList']['ASC'] = '昇順';
$lang['ja_JP']['MemberList']['DESC'] = '降順';
$lang['ja_JP']['MemberList']['EMAIL'] = 'Eメール';
$lang['ja_JP']['MemberList']['FILTERBYG'] = 'グループ指定';
$lang['ja_JP']['MemberList']['FN'] = '名前';
$lang['ja_JP']['MemberList']['ORDERBY'] = '並び順';
$lang['ja_JP']['MemberList']['PASSWD'] = 'パスワード';
$lang['ja_JP']['MemberList']['SEARCH'] = '検索';
$lang['ja_JP']['MemberList']['SN'] = '姓';
$lang['ja_JP']['MemberList.ss']['FILTER'] = 'フィルター';
$lang['ja_JP']['MemberList_PageControls.ss']['DISPLAYING'] = '表示中';
$lang['ja_JP']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'メンバー';
$lang['ja_JP']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'メンバー';
$lang['ja_JP']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'メンバー';
$lang['ja_JP']['MemberList_PageControls.ss']['OF'] = 'の';
$lang['ja_JP']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'メンバー';
$lang['ja_JP']['MemberList_PageControls.ss']['TO'] = 'へ';
$lang['ja_JP']['MemberList_PageControls.ss']['VIEWFIRST'] = '1番目に閲覧したもの';
$lang['ja_JP']['MemberList_PageControls.ss']['VIEWLAST'] = '最近閲覧したもの';
$lang['ja_JP']['MemberList_PageControls.ss']['VIEWNEXT'] = '次ページを見る';
$lang['ja_JP']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = '前ページを見る';
$lang['ja_JP']['MemberList_Table.ss']['EMAIL'] = 'メールアドレス';
$lang['ja_JP']['MemberList_Table.ss']['FN'] = '名前';
$lang['ja_JP']['MemberList_Table.ss']['PASSWD'] = 'パスワード';
$lang['ja_JP']['MemberList_Table.ss']['SN'] = '姓';
$lang['ja_JP']['MemberTableField']['ADD'] = '追加';
$lang['ja_JP']['MemberTableField']['ADDEDTOGROUP'] = 'グループにメンバーを追加';
$lang['ja_JP']['MemberTableField']['ADDINGFIELD'] = '領域を追加しています';
$lang['ja_JP']['MemberTableField']['ANYGROUP'] = 'いずれかのグループ';
$lang['ja_JP']['MemberTableField']['ASC'] = '昇順';
$lang['ja_JP']['MemberTableField']['DESC'] = '降順';
$lang['ja_JP']['MemberTableField']['EMAIL'] = 'メールアドレス';
$lang['ja_JP']['MemberTableField']['FILTER'] = 'フィルター';
$lang['ja_JP']['MemberTableField']['FILTERBYGROUP'] = 'グループでフィルター';
$lang['ja_JP']['MemberTableField']['FIRSTNAME'] = '姓';
$lang['ja_JP']['MemberTableField']['ORDERBY'] = 'Order by';
$lang['ja_JP']['MemberTableField']['SEARCH'] = '検索';
$lang['ja_JP']['MemberTableField.ss']['ADDNEW'] = '新規追加';
$lang['ja_JP']['MemberTableField.ss']['DELETEMEMBER'] = 'メンバーを削除';
$lang['ja_JP']['MemberTableField.ss']['EDITMEMBER'] = 'メンバーを編集';
$lang['ja_JP']['MemberTableField.ss']['SHOWMEMBER'] = 'メンバーを表示';
$lang['ja_JP']['MemberTableField']['SURNAME'] = '名字';
$lang['ja_JP']['ModelAdmin']['ADDBUTTON'] = '追加';
$lang['ja_JP']['ModelAdmin']['CLASSTYPE'] = 'タイプ';
$lang['ja_JP']['ModelAdmin']['DELETE'] = '削除';
$lang['ja_JP']['ModelAdmin']['DELETEDRECORDS'] = 'レコード %s 件を削除しました';
$lang['ja_JP']['ModelAdmin']['FOUNDRESULTS'] = '%s に該当するアイテムは見つかりません';
$lang['ja_JP']['ModelAdmin']['GOBACK'] = '戻る';
$lang['ja_JP']['ModelAdmin']['IMPORT'] = 'CSVファイルからインポートする';
$lang['ja_JP']['ModelAdmin']['IMPORTEDRECORDS'] = 'レコード %s 件をインポートしました';
$lang['ja_JP']['ModelAdmin']['ITEMNOTFOUND'] = '見つかりませんでした';
$lang['ja_JP']['ModelAdmin']['SAVE'] = '保存';
$lang['ja_JP']['ModelAdmin']['SEARCHRESULTS'] = '検索結果';
$lang['ja_JP']['ModelAdmin']['SELECTALL'] = 'すべて選択';
$lang['ja_JP']['ModelAdmin']['SELECTNONE'] = 'ひとつ選択';
$lang['ja_JP']['ModelAdmin']['UPDATEDRECORDS'] = 'レコード %s 件をアップデートしました';
$lang['ja_JP']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'データベースコラム';
$lang['ja_JP']['ModelAdmin_left.ss']['ADDLISTING'] = 'リストに追加';
$lang['ja_JP']['ModelAdmin_left.ss']['ADD_TAB_HEADER'] = '追加';
$lang['ja_JP']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'インポート';
$lang['ja_JP']['PageComment']['COMMENTBY'] = 'Comment by \'%s\' on %s';
$lang['ja_JP']['PageCommentInterface']['POST'] = '投函';
$lang['ja_JP']['PageCommentInterface']['SPAMQUESTION'] = '迷惑メール保護の為の質問: %s';
$lang['ja_JP']['PageCommentInterface.ss']['COMMENTS'] = 'コメント';
$lang['ja_JP']['PageCommentInterface.ss']['NEXT'] = '次ページ';
$lang['ja_JP']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'このページにはコメントはありません。';
$lang['ja_JP']['PageCommentInterface.ss']['POSTCOM'] = 'コメントする';
$lang['ja_JP']['PageCommentInterface.ss']['PREV'] = '前ページ';
$lang['ja_JP']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'このページのコメントにRSS feedがあります';
$lang['ja_JP']['PageCommentInterface']['YOURCOMMENT'] = 'コメント';
$lang['ja_JP']['PageCommentInterface']['YOURNAME'] = '名前';
$lang['ja_JP']['PageCommentInterface_Controller']['SPAMQUESTION'] = '迷惑メール保護の為の質問: %s';
$lang['ja_JP']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'あなたのコメントを投稿しました。承認されるまでお待ちください。';
$lang['ja_JP']['PageCommentInterface_Form']['MSGYOUPOSTED'] = '投函したメッセージは〜でした:';
$lang['ja_JP']['PageCommentInterface_Form']['SPAMDETECTED'] = '迷惑メールを検出!!';
$lang['ja_JP']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'コメントを承認する';
$lang['ja_JP']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'このコメントはスパムでありません';
$lang['ja_JP']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'このコメントはスパムです';
$lang['ja_JP']['PageCommentInterface_singlecomment.ss']['PBY'] = '投稿者';
$lang['ja_JP']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'このコンテンツを取り除く';
$lang['ja_JP']['ReportAdmin_left.ss']['REPORTS'] = 'レポート';
$lang['ja_JP']['ReportAdmin_right.ss']['WELCOME1'] = 'ようこそ';
$lang['ja_JP']['ReportAdmin_right.ss']['WELCOME2'] = 'レポート管理について  左の特定のレポートから選択してください';
$lang['ja_JP']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'レポート';
$lang['ja_JP']['SecurityAdmin']['ADDMEMBER'] = 'メンバー追加';
$lang['ja_JP']['SecurityAdmin']['EDITPERMISSIONS'] = '許可するグループを編集します。';
$lang['ja_JP']['SecurityAdmin']['MENUTITLE'] = 'セキュリティ';
$lang['ja_JP']['SecurityAdmin']['NEWGROUP'] = '新規グループ';
$lang['ja_JP']['SecurityAdmin']['SAVE'] = '保存';
$lang['ja_JP']['SecurityAdmin']['SGROUPS'] = 'セキュリティグループ';
$lang['ja_JP']['SecurityAdmin_left.ss']['CREATE'] = '作成';
$lang['ja_JP']['SecurityAdmin_left.ss']['DEL'] = '削除';
$lang['ja_JP']['SecurityAdmin_left.ss']['DELGROUPS'] = '選択したグループを削除';
$lang['ja_JP']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'ドラッグ &amp; ドロップを有効にする';
$lang['ja_JP']['SecurityAdmin_left.ss']['GO'] = '実行';
$lang['ja_JP']['SecurityAdmin_left.ss']['SECGROUPS'] = 'セキュリティグループ';
$lang['ja_JP']['SecurityAdmin_left.ss']['SELECT'] = '削除したいページを選択して、以下のボタンをクリックして下さい';
$lang['ja_JP']['SecurityAdmin_left.ss']['TOREORG'] = 'サイトを再編成する為に,希望するものをドラッグして囲って下さい';
$lang['ja_JP']['SecurityAdmin_right.ss']['WELCOME1'] = 'ようこそ';
$lang['ja_JP']['SecurityAdmin_right.ss']['WELCOME2'] = 'セキュリティ管理について  左のグループから選択してください';
$lang['ja_JP']['SideReport']['EMPTYPAGES'] = 'ページがありません';
$lang['ja_JP']['SideReport']['LAST2WEEKS'] = '２週間以内の変更ページ';
$lang['ja_JP']['SideReport']['REPEMPTY'] = '%s のレポートはありません';
$lang['ja_JP']['SideReport']['TODO'] = '編集予定';
$lang['ja_JP']['StaticExporter']['BASEURL'] = 'ベースURL';
$lang['ja_JP']['StaticExporter']['EXPORTTO'] = 'あのフォルダに出力してください。';
$lang['ja_JP']['StaticExporter']['FOLDEREXPORT'] = 'エクスポート先のフォルダ';
$lang['ja_JP']['StaticExporter']['NAME'] = '固定のエクスポート先';
$lang['ja_JP']['StaticExporter']['ONETHATEXISTS'] = '実在するフォルダを指定してください';
$lang['ja_JP']['TaskList.ss']['BY'] = 'by';
$lang['ja_JP']['ThumbnailStripField']['NOIMAGESFOUND'] = 'の中から画像は見つかりませんでした';
$lang['ja_JP']['ThumbnailStripField']['NOTAFOLDER'] = 'フォルダーではありません';
$lang['ja_JP']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(上記のフォルダを選択してください。)';
$lang['ja_JP']['ViewArchivedEmail.ss']['CANACCESS'] = 'このリンクから、保管されたサイトにアクセスできます。';
$lang['ja_JP']['ViewArchivedEmail.ss']['HAVEASKED'] = 'You have asked to view the content of our site on';
$lang['ja_JP']['WaitingOn.ss']['ATO'] = '割り当てられた';
$lang['ja_JP']['WidgetAreaEditor.ss']['AVAILABLE'] = '利用できるウィッジット';
$lang['ja_JP']['WidgetAreaEditor.ss']['INUSE'] = '利用中ウィッジット';
$lang['ja_JP']['WidgetAreaEditor.ss']['NOAVAIL'] = '現在使用できるウィジェットはありません。';
$lang['ja_JP']['WidgetAreaEditor.ss']['TOADD'] = 'ウィジェットを加えるには、左部からここまで、ドラッグしてください。';
$lang['ja_JP']['WidgetEditor.ss']['DELETE'] = '削除';

?>