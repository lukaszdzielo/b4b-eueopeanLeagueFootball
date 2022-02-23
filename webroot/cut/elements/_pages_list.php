<div class="cut__pageslist">
    <button class="cut__pageslist--button" role="button">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14 fa-2x">
            <path fill="#ffffff" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path>
        </svg>
    </button>
    <ul>
        <li><a href="index.php">GG8-59 Dashboard</a></li>
    </ul>
</div>

<style>
    .cut__pageslist {
        position: fixed;
        top: 0;
        left: -290px;
        padding: 10px 15px;
        border-width: 0 1px 1px 0;
        border-color: #212121;
        border-style: solid;
        width: 290px;
        background: #f5f5f5;
        z-index: 9999;
        font-size: 14px;
        line-height: normal;
        font-family: monospace;
        transition: 0.4s ease-in-out;
        box-sizing: border-box;
    }

    .cut__pageslist:hover {
        left: 0;
    }

    .cut__pageslist--button {
        position: absolute;
        top: 0;
        right: -31px;
        border: 0;
        border-radius: 0;
        padding: 5px;
        width: 30px;
        height: 30px;
        background: #212121;
        color: rgba(255, 255, 255, 1);
        text-align: right;
        font-size: 10px;
        line-height: 15px;
        word-break: break-all;
        z-index: 9999;
        outline: none !important;
    }

    .cut__pageslist--button svg {
        width: 100%;
        height: 100%;
    }

    .cut__pageslist ul {
        margin: 0;
        padding: 0;
        max-height: calc(100vh - 21px);
        list-style: none;
        overflow: auto;
    }

    .cut__pageslist ul li+li {
        margin-top: 5px;
    }

    .cut__pageslist a {
        color: #424242;
        text-decoration: none;
    }

    .cut__pageslist a:hover {
        color: #212121;
    }
</style>