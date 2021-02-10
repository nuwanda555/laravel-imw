
<div class="visible-print text-center">
    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('https://www.seeklogo.net/wp-content/uploads/2016/09/facebook-icon-preview-1.png', .3, true)->size(200)->generate('http://www.simplesoftware.io')) !!} ">    <p>Scan me to return to the original page.</p>
</div>';

