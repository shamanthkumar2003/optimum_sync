<?php
// contact.php
?>
<?php include 'includes/header.php'; ?>
<section style="margin-top: 50px;"> <!-- Added margin to move it down -->
    <style>
        *, *:before, *:after {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        html, body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        }



section {
    margin-bottom: 0 !important; /* Ensures section doesn't push content */
    padding-bottom: 0 !important;
}
        body {
            background: linear-gradient(to right, #020313 0%, #0F172A 100%);
            font-size: 12px;
            height:100%;
        }

        body, button, input {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            letter-spacing: 1.4px;
        }

        .background {
    display: flex;
    min-height: calc(100vh - 100px); /* Adjust based on footer height */
    justify-content: center;
    align-items: center;
}
footer {
    position: relative;
    bottom: 0;
    width: 100%;
}


        #con {
            flex: 0 1 700px;
            margin-top: 120px;
            padding: 20px;
        }

        .screen {
            position: relative;
            background: #3e3e3e;
            border-radius: 15px;
            padding: 20px;
            max-height: 90vh; /* Prevents it from exceeding viewport height */
            overflow: hidden; 
        }

        .screen:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 20px;
            right: 20px;
            bottom: 0;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
            z-index: -1;
        }

        .screen-header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background: #4d4d4f;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .screen-header-left {
            margin-right: auto;
        }

        .screen-header-button {
            display: inline-block;
            width: 8px;
            height: 8px;
            margin-right: 3px;
            border-radius: 8px;
            background: white;
        }

        .screen-header-button.close {
            background: #ed1c6f;
        }

        .screen-header-button.maximize {
            background: #e8e925;
        }

        .screen-header-button.minimize {
            background: #74c54f;
        }

        .screen-header-right {
            display: flex;
        }

        .screen-header-ellipsis {
            width: 3px;
            height: 3px;
            margin-left: 2px;
            border-radius: 8px;
            background: #999;
        }

        .screen-body {
            display: flex;
        }

        .screen-body-item {
            flex: 1;
            padding: 50px;
        }

        .screen-body-item.left {
            display: flex;
            flex-direction: column;
        }

        .app-title {
            display: flex;
            flex-direction: column;
            position: relative;
            font-size: 26px;
        }

        .contact-color {
            color: #32b3fc;
        }

        .us-color {
            color: #fff;
        }

        .app-title:after {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 25px;
            height: 4px;
            background: #32b3fc;
        }

        .app-contact {
            margin-top: auto;
            font-size: 12px;
            color: #888;
        }

        .app-form-group {
            margin-bottom: 15px;
        }

        .app-form-group.message {
            margin-top: 40px;
        }

        .app-form-group.buttons {
            margin-bottom: 0;
            display: flex;
            justify-content: space-between; /* Align buttons side by side */
        }

        #form-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px; /* Adds spacing above buttons */
        }

        .app-form-control {
            width: 100%;
            padding: 10px 0;
            background: none;
            border: none;
            border-bottom: 1px solid #666;
            color: #ddd;
            font-size: 14px;
            text-transform: uppercase;
            outline: none;
            transition: border-color .2s;
        }

        .app-form-control::placeholder {
            color: #fff;
        }

        .app-form-control:focus {
            border-bottom-color: #ddd;
        }

        .app-form-button {
            background: none;
            border: none;
            color: #32b3fc;
            font-size: 14px;
            cursor: pointer;
            outline: none;
        }

        .app-form-button:hover {
            color: #b9134f;
        }

        @media screen and (max-width: 520px) {
            .screen-body {
                flex-direction: column;
            }

            .screen-body-item.left {
                margin-bottom: 30px;
            }

            .app-title {
                flex-direction: row;
            }

            .app-title span {
                margin-right: 12px;
            }

            .app-title:after {
                display: none;
            }
        }

        @media screen and (max-width: 600px) {
            .screen-body {
                padding: 40px;
            }

            .screen-body-item {
                padding: 0;
            }
        }
    </style>

    <div class="background">
        <div class="container" id="con">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <div class="contact-color"><span>CONTACT</span></div>
                            <div class="us-color"><span>US</span></div>
                        </div>
                        <div class="app-contact">CONTACT INFO : 99803 36484</div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="Name">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="Email">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="Contact No">
                            </div>
                            <div class="app-form-group message">
                                <input class="app-form-control" placeholder="Message">
                            </div>
                            <div class="app-form-group buttons" id="form-buttons">
                                <button class="app-form-button">CANCEL</button>
                                <button class="app-form-button">SEND</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="credits">
                <!-- <a class="credits-link" href="" target="_blank">Designed by You</a> -->
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
