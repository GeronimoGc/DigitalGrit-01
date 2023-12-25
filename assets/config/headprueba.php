
<style id='joinchat-button-style-inline-css' type='text/css'>
    .wp-block-joinchat-button {
        border: none !important;
        text-align: center
    }

    .wp-block-joinchat-button figure {
        display: table;
        margin: 0 auto;
        padding: 0
    }

    .wp-block-joinchat-button figcaption {
        font: normal normal 400 .6em/2em var(--wp--preset--font-family--system-font, sans-serif);
        margin: 0;
        padding: 0
    }

    .wp-block-joinchat-button .joinchat-button__qr {
        background-color: #fff;
        border: 6px solid #25d366;
        border-radius: 30px;
        box-sizing: content-box;
        display: block;
        height: 200px;
        margin: auto;
        overflow: hidden;
        padding: 10px;
        width: 200px
    }

    .wp-block-joinchat-button .joinchat-button__qr canvas,
    .wp-block-joinchat-button .joinchat-button__qr img {
        display: block;
        margin: auto
    }

    .wp-block-joinchat-button .joinchat-button__link {
        align-items: center;
        background-color: #25d366;
        border: 6px solid #25d366;
        border-radius: 30px;
        display: inline-flex;
        flex-flow: row nowrap;
        justify-content: center;
        line-height: 1.25em;
        margin: 0 auto;
        text-decoration: none
    }

    .wp-block-joinchat-button .joinchat-button__link:before {
        background: transparent var(--joinchat-ico) no-repeat center;
        background-size: 100%;
        content: "";
        display: block;
        height: 1.5em;
        margin: -.75em .75em -.75em 0;
        width: 1.5em
    }

    .wp-block-joinchat-button figure+.joinchat-button__link {
        margin-top: 10px
    }

    @media (orientation:landscape)and (min-height:481px),
    (orientation:portrait)and (min-width:481px) {
        .wp-block-joinchat-button.joinchat-button--qr-only figure+.joinchat-button__link {
            display: none
        }
    }

    @media (max-width:480px),
    (orientation:landscape)and (max-height:480px) {
        .wp-block-joinchat-button figure {
            display: none
        }
    }
</style>

<style type="text/css" id="wp-custom-css">
    /* defaults: desk 20px, mobile 6px */
    .joinchat {
        --bottom: 100px;
    }

    /* default: 60px */
    .joinchat {
        --s: 80px;
    }
</style>
