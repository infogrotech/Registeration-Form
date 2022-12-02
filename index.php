<script src="https://cdn02.jotfor.ms/static/prototype.forms.js?3.3.37591" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.37591" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script>
  function display1(val) {
    var element1 = document.getElementById('dept');

    if (val == 'dept') {

      element1.style.display = 'block';
      element1.required = true;
    } else {
      element1.style.display = 'none';
    }
  }


  function display2(val) {
    var element2 = document.getElementById('intern');
    if (val == 'intern') {

      element2.style.display = 'block';
      element2.required = true;
    } else {
      element2.style.display = 'none';
    }
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.37591" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style type="text/css">
  body {
    background: rgb(238, 174, 202);
    background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
  }

  form {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    top: 7%;
  }

  @media print {
    .form-section {
      display: inline !important
    }

    .form-pagebreak {
      display: none !important
    }

    .form-section-closed {
      height: auto !important
    }

    .page-section {
      position: initial !important
    }
  }
</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/nova.css?3.3.37591" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?themeRevisionID=5f6c4c83346ec05354558fe8" />
<link href="css/w3s.css" rel="stylesheet" />

<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.37591" />
<style type="text/css">
  body {
    margin: 0 auto;
  }

  .main {
    box-shadow: rgba(148, 187, 233, 0.25) 0px 30px 60px -12px inset, rgba(148, 187, 233, 0.3) 0px 18px 36px -18px inset;
    border-radius: 20px;
  }



  @import url('https://shots.jotform.com/elton/genericTheme.css');

  .form-label-left {
    width: 150px;
  }

  .form-line {
    padding-top: 12px;
    padding-bottom: 12px;
  }

  .form-label-right {
    width: 150px;
  }

  .form-all {
    width: 690px;
    color: #555 !important;
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
    font-size: 14px;
  }

  .form-radio-item label,
  .form-checkbox-item label,
  .form-grading-label,
  .form-header {
    color: #555;
  }
</style>
<style type="text/css" id="form-designer-style">
  /* Injected CSS Code */
  @import url('https://shots.jotform.com/elton/genericTheme.css');
  @import "https://fonts.googleapis.com/css?family=Didact Gothic:light,lightitalic,normal,italic,bold,bolditalic";

  .form-all {
    font-family: "Didact Gothic", sans-serif;
  }

  .form-all {
    width: 600px;
  }

  .form-label-left,
  .form-label-right {
    width: 150px;
  }

  .form-label {
    white-space: normal;
  }

  .form-label-left {
    display: inline-block;
    white-space: normal;
    float: left;
    text-align: left;
  }

  .form-label-right {
    display: inline-block;
    white-space: normal;
    float: left;
    text-align: right;
  }

  .form-label-top {
    white-space: normal;
    display: block;
    float: none;
    text-align: left;
  }

  .form-radio-item label:before {
    top: 0;
  }

  .form-all {
    font-size: 16px;
  }

  .form-label {
    font-weight: bold;
  }

  .form-checkbox-item label,
  .form-radio-item label {
    font-weight: normal;
  }

  .supernova {
    background-color: #ffffff;
  }

  .supernova body {
    background-color: transparent;
  }

  /*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
  /* | */
  @media screen and (min-width: 480px) {
    .supernova .form-all {
      border: 1px solid #e6e6e6;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
      -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
      box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    }


  }

  /* | */
  /* | */
  @media screen and (max-width: 480px) {
    .jotform-form {
      padding: 10px 0;
    }
  }

  /* | */
  /* | */
  @media screen and (min-width: 480px) and (max-width: 767px) {
    .jotform-form {
      padding: 30px 0;
    }

    form {
      position: relative;
      top: 15%;
    }
  }

  /* | */
  /* | */
  @media screen and (min-width: 480px) and (max-width: 599px) {
    .jotform-form {
      padding: 30px 0;
    }

  }

  /* | */
  /* | */
  @media screen and (min-width: 768px) {
    .jotform-form {
      padding: 60px 0;
    }
  }

  /* | */
  /* | */
  @media screen and (max-width: 599px) {
    .jotform-form {
      padding: 12px;
    }

    form {
      position: relative;
      top: 20%;
    }
  }

  @media screen and (max-width: 450px) {
    form {
      position: relative;
      top: 25%;
    }
  }

  /* | */
  .supernova .form-all,
  .form-all {
    background-color: #ffffff;
    border: 1px solid transparent;
  }

  .form-header-group {
    border-color: #e6e6e6;
  }

  .form-matrix-table tr {
    border-color: #e6e6e6;
  }

  .form-matrix-table tr:nth-child(2n) {
    background-color: #f2f2f2;
  }

  .form-all {
    color: #555555;
  }

  .form-header-group .form-header {
    color: #555555;
  }

  .form-header-group .form-subHeader {
    color: #6f6f6f;
  }

  .form-sub-label {
    color: #6f6f6f;
  }

  .form-label-top,
  .form-label-left,
  .form-label-right,
  .form-html {
    color: #555555;
  }

  .form-checkbox-item label,
  .form-radio-item label {
    color: #6f6f6f;
  }

  .form-line.form-line-active {
    -webkit-transition-property: all;
    -moz-transition-property: all;
    -ms-transition-property: all;
    -o-transition-property: all;
    transition-property: all;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -ms-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease;
    -moz-transition-timing-function: ease;
    -ms-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    transition-timing-function: ease;
    background-color: rgba(255, 251, 234, 0);
  }

  /* omer */
  .form-radio-item,
  .form-checkbox-item {
    padding-bottom: 0px !important;
  }

  .form-radio-item:last-child,
  .form-checkbox-item:last-child {
    padding-bottom: 0;
  }

  /* omer */
  .form-single-column .form-checkbox-item,
  .form-single-column .form-radio-item {
    width: 100%;
  }

  .supernova {
    height: 100%;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center top;
    background-repeat: repeat;
  }

  .supernova {
    background-image: none;
    background-image: url("https://shots.jotform.com/elton/images/reg_form_main_bg.png");
  }

  #stage {
    background-image: none;
    background-image: url("https://shots.jotform.com/elton/images/reg_form_main_bg.png");
  }

  /* | */
  .form-all {
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center top;
    background-repeat: repeat;
  }

  .form-header-group {
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center top;
  }

  .form-line {
    margin-top: 0px;
    margin-bottom: 0px;
  }

  .form-line {
    padding: 12px 36px;
  }

  .form-all .qq-upload-button,
  .form-all .form-submit-button,
  .form-all .form-submit-reset,
  .form-all .form-submit-print {
    font-size: 1em;
    padding: 9px 15px;
    font-family: "Didact Gothic", sans-serif;
    font-size: 16px;
    font-weight: normal;
  }

  .form-all .qq-upload-button,
  .form-all .form-submit-button,
  .form-all .form-submit-reset,
  .form-all .form-submit-print {
    color: #454545 !important;
    background: #ffffff;
    box-shadow: none;
    text-shadow: none;
  }

  .form-all .form-pagebreak-back,
  .form-all .form-pagebreak-next {
    font-size: 1em;
    padding: 9px 15px;
    font-family: "Didact Gothic", sans-serif;
    font-size: 16px;
    font-weight: normal;
  }

  /*
& when ( @buttonFontType = google ) { @import (css) "@{buttonFontLink}";
}
*/
  h2.form-header {
    line-height: 1.618em;
    font-size: 1.714em;
  }

  h2~.form-subHeader {
    line-height: 1.5em;
    font-size: 1.071em;
  }

  .form-header-group {
    text-align: left;
  }

  .form-header-group {
    background-image: url("https://shots.jotform.com/elton/images/reg_form_header_logo.png");
  }

  /*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
  .form-captcha input,
  .form-spinner input,
  .form-error-message {
    padding: 4px 3px 2px 3px;
  }

  .form-header-group {
    font-family: "Didact Gothic", sans-serif;
  }

  .form-section {
    padding: 0px 0px 0px 0px;
  }

  .form-header-group {
    margin: 0px 0px 0px 0px;
  }

  .form-header-group {
    padding: 60px 36px 60px 36px;
  }

  .form-header-group {
    background-color: #3cdaff;
  }

  .form-textbox,
  .form-textarea {
    padding: 4px 3px 2px 3px;
  }

  .form-dropdown {
    -webkit-appearance: menulist-button;
    border-color: #cccccc;
  }

  [data-type="control_dropdown"] .form-input,
  [data-type="control_dropdown"] .form-input-wide {
    width: 150px;
  }

  .form-header-group {
    border-bottom: none;
  }

  .form-label {
    font-family: "Didact Gothic", sans-serif;
  }

  li[data-type="control_image"] div {
    text-align: left;
  }

  li[data-type="control_image"] img {
    border: none;
    border-width: 0px !important;
    border-style: solid !important;
    border-color: false !important;
  }

  .form-line-column {
    width: auto;
  }

  .form-line-error {
    background-color: #ffffff;
    -webkit-box-shadow: inset 0px 3px 11px -7px #ff3200;
    -moz-box-shadow: inset 0px 3px 11px -7px #ff3200;
    box-shadow: inset 0px 3px 11px -7px #ff3200;
  }

  .form-line-error input:not(#coupon-input),
  .form-line-error textarea,
  .form-line-error .form-validation-error {
    -webkit-transition-property: none;
    -moz-transition-property: none;
    -ms-transition-property: none;
    -o-transition-property: none;
    transition-property: none;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -ms-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease;
    -moz-transition-timing-function: ease;
    -ms-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    transition-timing-function: ease;
    border: 1px solid #fff4f4;
    -moz-box-shadow: 0 0 3px #fff4f4;
    -webkit-box-shadow: 0 0 3px #fff4f4;
    box-shadow: 0 0 3px #fff4f4;
  }

  .form-line-error .form-error-message {
    margin: 0;
    position: absolute;
    color: #fff;
    display: inline-block;
    right: 0;
    font-size: 10px;
    position: absolute !important;
    box-shadow: none;
    top: 0px;
    line-height: 20px;
    color: #FFF;
    background: #ff3200;
    padding: 0px 5px;
    bottom: auto;
    min-width: 105px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
  }

  .form-line-error .form-error-message img,
  .form-line-error .form-error-message .form-error-arrow {
    display: none;
  }

  .ie-8 .form-all {
    margin-top: auto;
    margin-top: initial;
  }

  .ie-8 .form-all:before {
    display: none;
  }

  /* | */
  @media screen and (max-width: 480px),
  screen and (max-device-width: 767px) and (orientation: portrait),
  screen and (max-device-width: 415px) and (orientation: landscape) {
    .testOne {
      letter-spacing: 0;
    }

    .testTwo {
      letter-spacing: 1;
    }

    .jotform-form {
      padding: 12px 0 0 0;
    }

    .form-all {
      border: 0;
      width: 94% !important;
      max-width: initial;
    }

    .form-sub-label-container {
      width: 100%;
      margin: 0;
      margin-right: 0;
      float: left;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    span.form-sub-label-container+span.form-sub-label-container {
      margin-right: 0;
    }

    .form-sub-label {
      white-space: normal;
    }

    .form-address-table td,
    .form-address-table th {
      padding: 0 1px 10px;
    }

    .form-submit-button,
    .form-submit-print,
    .form-submit-reset {
      width: 100%;
      margin-left: 0 !important;
    }

    div[id*=at_] {
      font-size: 14px;
      font-weight: 700;
      height: 8px;
      margin-top: 6px;
    }

    .showAutoCalendar {
      width: 20px;
    }

    img.form-image {
      max-width: 100%;
      height: auto;
    }

    .form-matrix-row-headers {
      width: 100%;
      word-break: break-all;
      min-width: 40px;
    }

    .form-collapse-table,
    .form-header-group {
      margin: 0;
    }

    .form-collapse-table {
      height: 100%;
      display: inline-block;
      width: 100%;
    }

    .form-collapse-hidden {
      display: none !important;
    }

    .form-input {
      width: 100%;
    }

    .form-label {
      width: 100% !important;
    }

    .form-label-left,
    .form-label-right {
      display: block;
      float: none;
      text-align: left;
      width: auto !important;
    }

    .form-line,
    .form-line.form-line-column {
      padding: 2% 5%;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    input[type=text],
    input[type=email],
    input[type=tel],
    textarea {
      width: 100%;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      max-width: initial !important;
    }

    .form-dropdown,
    .form-textarea,
    .form-textbox {
      width: 100% !important;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    .form-input,
    .form-input-wide,
    .form-textarea,
    .form-textbox,
    .form-dropdown {
      max-width: initial !important;
    }

    .form-address-city,
    .form-address-line,
    .form-address-postal,
    .form-address-state,
    .form-address-table,
    .form-address-table .form-sub-label-container,
    .form-address-table select,
    .form-input {
      width: 100%;
    }

    div.form-header-group {
      padding: 60px 36px !important;
      padding-left: 5% !important;
      padding-right: 5% !important;
      margin: 0 0px 2% !important;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    div.form-header-group.hasImage img {
      max-width: 100%;
    }

    [data-type="control_button"] {
      margin-bottom: 0 !important;
    }

    [data-type=control_fullname] .form-sub-label-container {
      width: 48%;
    }

    [data-type=control_fullname] .form-sub-label-container:first-child {
      margin-right: 4%;
    }

    [data-type=control_phone] .form-sub-label-container {
      width: 65%;
    }

    [data-type=control_phone] .form-sub-label-container:first-child {
      width: 31%;
      margin-right: 4%;
    }

    [data-type=control_datetime] .form-sub-label-container+.form-sub-label-container,
    [data-type=control_datetime] .form-sub-label-container:first-child {
      width: 27.3%;
      margin-right: 6%;
    }

    [data-type=control_datetime] .form-sub-label-container+.form-sub-label-container+.form-sub-label-container {
      width: 33.3%;
      margin-right: 0;
    }

    [data-type=control_datetime] span+span+span>span:first-child {
      display: block;
      width: 100% !important;
    }

    [data-type=control_birthdate] .form-sub-label-container,
    [data-type=control_datetime] span+span+span>span:first-child+span+span,
    [data-type=control_time] .form-sub-label-container {
      width: 27.3% !important;
      margin-right: 6% !important;
    }

    [data-type=control_birthdate] .form-sub-label-container:last-child,
    [data-type=control_time] .form-sub-label-container:last-child {
      width: 33.3% !important;
      margin-right: 0 !important;
    }

    .form-pagebreak-back-container,
    .form-pagebreak-next-container {
      width: 50% !important;
    }

    .form-pagebreak-back,
    .form-pagebreak-next,
    .form-product-item.hover-product-item {
      width: 100%;
    }

    .form-pagebreak-back-container {
      padding: 0;
      text-align: right;
    }

    .form-pagebreak-next-container {
      padding: 0;
      text-align: left;
    }

    .form-pagebreak {
      margin: 0 auto;
    }

    .form-buttons-wrapper {
      margin: 0 !important;
      margin-left: 0 !important;
    }

    .form-buttons-wrapper button {
      width: 100%;
    }

    .form-buttons-wrapper .form-submit-print {
      margin: 0 !important;
    }

    table {
      width: 100% !important;
      max-width: initial !important;
    }

    table td+td {
      padding-left: 3%;
    }

    .form-checkbox-item,
    .form-radio-item {
      white-space: normal !important;
    }

    .form-checkbox-item input,
    .form-radio-item input {
      width: auto;
    }

    .form-collapse-table {
      margin: 0 5%;
      display: block;
      zoom: 1;
      width: auto;
    }

    .form-collapse-table:before,
    .form-collapse-table:after {
      display: table;
      content: '';
      line-height: 0;
    }

    .form-collapse-table:after {
      clear: both;
    }

    .fb-like-box {
      width: 98% !important;
    }

    .form-error-message {
      clear: both;
      bottom: -10px;
    }

    .date-separate,
    .phone-separate {
      display: none;
    }

    .custom-field-frame,
    .direct-embed-widgets,
    .signature-pad-wrapper {
      width: 100% !important;
    }
  }

  /* | */
  /*PREFERENCES STYLE*/
  .form-all {
    font-family: Didact Gothic, sans-serif;
  }

  .form-all .qq-upload-button,
  .form-all .form-submit-button,
  .form-all .form-submit-reset,
  .form-all .form-submit-print {
    font-family: Didact Gothic, sans-serif;
  }

  .form-all .form-pagebreak-back-container,
  .form-all .form-pagebreak-next-container {
    font-family: Didact Gothic, sans-serif;
  }

  .form-header-group {
    font-family: Didact Gothic, sans-serif;
  }

  .form-label {
    font-family: Didact Gothic, sans-serif;
  }

  .form-line {
    margin-top: 12px 36px 12px 36px px;
    margin-bottom: 12px 36px 12px 36px px;
  }

  .form-all {
    max-width: 600px;
    width: 100%;
  }

  .form-label.form-label-left,
  .form-label.form-label-right,
  .form-label.form-label-left.form-label-auto,
  .form-label.form-label-right.form-label-auto {
    width: 150px;
  }

  .form-all {
    font-size: 16px
  }

  .form-all .qq-upload-button,
  .form-all .qq-upload-button,
  .form-all .form-submit-button,
  .form-all .form-submit-reset,
  .form-all .form-submit-print {
    font-size: 16px
  }

  .form-all .form-pagebreak-back-container,
  .form-all .form-pagebreak-next-container {
    font-size: 16px
  }

  .supernova .form-all,
  .form-all {
    background-color: rgb(255, 255, 255);
  }

  .form-all {
    color: #555;
  }

  .form-header-group .form-header {
    color: #555;
  }

  .form-header-group .form-subHeader {
    color: #555;
  }

  .form-label-top,
  .form-label-left,
  .form-label-right,
  .form-html,
  .form-checkbox-item label,
  .form-radio-item label,
  span.FITB .qb-checkbox-label,
  span.FITB .qb-radiobox-label,
  span.FITB .form-radio label,
  span.FITB .form-checkbox label,
  [data-blotid][data-type=checkbox] [data-labelid],
  [data-blotid][data-type=radiobox] [data-labelid],
  span.FITB-inptCont[data-type=checkbox] label,
  span.FITB-inptCont[data-type=radiobox] label {
    color: #555;
  }

  .form-sub-label {
    color: #6f6f6f;
  }

  .supernova {
    background-color: undefined;
  }

  .supernova body {
    background: transparent;
  }

  .form-textbox,
  .form-textarea,
  .form-dropdown,
  .form-radio-other-input,
  .form-checkbox-other-input,
  .form-captcha input,
  .form-spinner input {
    background-color: undefined;
  }

  .supernova {
    height: 100%;
    background-repeat: repeat;
    background-attachment: scroll;
    background-position: center top;
  }

  .supernova {
    background-image: url("https://shots.jotform.com/elton/images/reg_form_main_bg.png");
  }

  #stage {
    background-image: url("https://shots.jotform.com/elton/images/reg_form_main_bg.png");
  }

  .form-all {
    background-image: none;
  }

  .ie-8 .form-all:before {
    display: none;
  }

  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }

  /*PREFERENCES STYLE*/
  /*__INSPECT_SEPERATOR__*/
  @import url('https://shots.jotform.com/elton/genericTheme.css');

  .form-header-group {
    margin: 0;
    background-position: left center;
    background-size: 200px;
    padding-left: 200px;
    font-weight: bold;
    text-transform: uppercase;
    border: none;
  }

  .form-submit-button {
    filter: none;
    box-shadow: 1px 2px 0px #8A8A8A, 0 0 0 10px #07E4F9;
    padding: 12px 20px;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
  }

  .form-submit-button:hover {
    background: #FFF;
    box-shadow: 1px 2px 0px #8A8A8A, 0 0 0 8px #07E4F9;
  }

  .form-label.form-label-auto {
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  }

  /* Injected CSS Code */
</style>


<body>
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" style="display: flex; align-items: center; justify-content: center;">
      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" width="100" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <div class="container-fluid w3-animate-zoom" style="-webkit-backdrop-filter: blur(8px);
  backdrop-filter: blur(8px); position: fixed; z-index: 2; display: flex;
  justify-content: center; align-items: center;">

    <a class="navbar-brand " href="index.php"><img src="images/logo_1.png" alt="logo" width="150" height="100"></a>
    <div style="text-align: center;" class="header-text httal htvam">
      <!-- nav -->
      <h1 id="header_1" class="form-header" data-component="header">Students Registration Form </h1>
      <div id="subHeader_1" class="form-subHeader"> Please fill in the form below </div>
    </div>
  </div>

  <form class="jotform-form w3-animate-left" action="register.php" method="post" name="form_223333122913445" id="223333122913445" accept-charset="utf-8" autocomplete="on">


    <input type="hidden" name="formID" value="223333122913445" /> <input type="hidden" id="JWTContainer" value="" />
    <input type="hidden" id="cardinalOrderNumber" value="" />

    <div role="main" class="form-all main">
      <ul class="form-section page-section main1">
        <li id="cid_1" class="form-input-wide" data-type="control_head">
          <div>

          </div>
        </li>
        <li class="form-line jf-required" data-type="control_fullname" id="id_3"> <label class="form-label form-label-top form-label-auto" id="label_3" for="firstname"> Full Name <span class="form-required"> * </span> </label>

          <div style=" width: 100%; display: inline-flex; justify-content: space-around;">
            <div class="form-group"><input class="form-control transparent-input" data-msg="Please enter at least 4 chars" data-rule="minlen:4" id="firstname" name="firstname" placeholder="First Name" required="" type="text" /></div>
            <div class="form-group"><input class="form-control transparent-input" data-msg="Please enter at least 4 chars" data-rule="minlen:4" id="lastname" name="lastname" placeholder="Last Name" required="" type="text" /></div>
          </div>

        </li>
        <li class="form-line" data-type="control_radio" id="id_13">
          <div class="form-group col-md-offset-2"><label class="form-label form-label-top form-label-auto" id="gender" for="gender"> Gender <span class="form-required"> * </span> </label><label class="radio-inline"><input id="optradio" name="optradio" required="" type="radio" value="Mr" />&nbsp; &nbsp;Male </label> &nbsp; &nbsp; &nbsp; <label class="radio-inline"> <input id="optradio" name="optradio" required="" type="radio" value="Ms" />&nbsp; Female</label></div>
        </li>
        <li class="form-line jf-required" data-type="control_dropdown" id="id_15"> <label class="form-label form-label-top form-label-auto" id="label_15" for="dept1"> Select Department <span class="form-required"> *
            </span></label>
          <div class="form-group"><select class="form-control transparent-input" id="dept1" name="dept1" onchange="display1(this.value);" required="">
              <option value="" disabled selected>Select Department</option>
              <option value="B.E Civil engineering">B.E Civil engineering</option>
              <option value="Aerospace Engineering">B.E Aerospace Engineering</option>
              <option value="Automobile Engineering">B.E Automobile Engineering</option>
              <option value="Industrial Engineering">B.E Industrial Engineering</option>
              <option value="Mechanical Engineering">B.E Mechanical Engineering</option>
              <option value="Manufacturing Engineering">B.E Manufacturing Engineering</option>
              <option value="Printing Engineering">B.E Printing Engineering</option>
              <option value="Mining Engineering">B.E Mining Engineering</option>
              <option value="Information Technology">B.Tech Information Technology</option>
              <option value="Information science and Technology">B.Tech Information science and Technology</option>
              <option value="Computer science  and Engineering">B.E Computer science and Engineering</option>
              <option value="Electrical and Electronics Engineering">B.E Electrical and Electronics Engineering</option>
              <option value="Instrumentation Engineering">B.E Instrumentation Engineering</option>
              <option value="dept">others</option>
            </select></div>
          <div class="form-group"><input class="form-control transparent-input" data-msg="Please enter at least 4 chars" data-rule="minlen:4" id="dept" name="dept" placeholder="Type your Department e.g(B.E Electronic and Engineering)" style="display:none;" type="text" /></div>
        </li>
        <li class="form-line jf-required" data-type="control_dropdown" id="id_16"> <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> Select Internship <span class="form-required"> * </span> </label>
          <div class="form-group"><select class="form-control transparent-input" id="intern1" name="intern1" onchange="display2(this.value);" required="">
              <option value="" disabled selected>Select Internship </option>
              <option value="Web Development">Web Development</option>
              <option value="Blockchain">Blockchain</option>
              <option value="Machine Learning">Machine Learning</option>
              <option value="Deep Learning">Deep Learning</option>
              <option value="intern">others</option>
            </select></div>
          <div class="form-group"><input class="form-control transparent-input" data-msg="Please enter at least 4 chars" data-rule="minlen:4" id="intern" name="intern" placeholder="Type your Internship Preference" style="display:none;" type="text" /></div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_18"> <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18">College Name<span class="form-required"> * </span></label>
          <div class="form-group"><input class="form-control transparent-input" id="college" name="college" placeholder="College" required="" type="text" /></div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_17"> <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">College Register
            Number<span class="form-required"> * </span></label>
          <div class="form-group"><input class="form-control transparent-input" data-msg="Please enter at least 4 chars" data-rule="minlen:4" id="regno" name="regno" placeholder="Enter your University Registration No" required="" type="text" /></div>
        </li>

        <li class="form-line" data-type="control_textbox" id="id_18"> <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18">Year Of Passed Out<span class="form-required"> * </span></label>
          <div class="form-group"><input class="form-control transparent-input" id="yopo" name="yopo" placeholder="Year of passed out" required="" title="Check The Number You Have Entered" type="text" /></div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_19"> <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19">Contact<span class="form-required"> * </span></label>
          <div class="form-group"><input class="form-control transparent-input" id="name" name="contact" pattern="^\d{10}$" placeholder="Contact No" required="" title="Check The Number You Have Entered" type="text" placeholder="ex: 9840984002" /></div>
        </li>
        <li class="form-line jf-required" data-type="control_email" id="id_4"> <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> E-mail<span class="form-required"> * </span> </label>
          <div class="form-group"><input class="form-control transparent-input" id="email" name="email" placeholder="Email Id" required="" type="text" /></div>
        </li>

        <li class="form-line" data-type="control_button" id="id_2">
          <div id="cid_2" class="form-input-wide">
            <div style="text-align:center" data-align="center" class="form-buttons-wrapper form-buttons-center jsTest-button-wrapperField"> <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content=""> SUBMIT </button> </div>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </form>

</body>
