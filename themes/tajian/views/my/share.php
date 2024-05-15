<?php
$linkPrefix = '';
//多用户路径支持
if (!empty(FSC::$app['config']['multipleUserUriParse']) && !empty(FSC::$app['user_id'])) {
    $linkPrefix = '/' . FSC::$app['user_id'];
}

$shareUrl = "{$linkPrefix}/";
?><main class="g_main_lay">
    <form class="g_form_style mt65" id="share_form" action="" method="POST">
        <div class="mb-3 pt20">
            <label for="text_share_content" class="form-label">分享链接</label>
            <textarea id="text_share_content" name="share_content" rows="5" data-share-url="<?=$shareUrl?>"><?=$shareUrl?> “<?=$viewData['nickname']?>”的聚宝盆，我整理的很不错的视频，复制链接到浏览器粘贴打开</textarea>
            <p class="mt10">点下面按钮复制分享内容，在微信、QQ等App里粘贴发给朋友。</p>
        </div>
        <div class="avform_bt vercenter">
            <button class="jsbtn" aria-label="复制" type="button" data-clipboard-target="#text_share_content">
                <div class="loading_bt bt_class_JS elementNone verMiddle">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20"></circle>
                    </svg>
                </div>
                <span class="bt_text_JS">复制</span>
                <div class="bt_loading_cover bt_class_JS elementNone"></div>
            </button>

            <span class="ml20">
                <a href="<?=$linkPrefix?>/my/">返回</a>
            </span>
        </div>
    </form>
</main>
<script src="/js/clipboard.min.js"></script>