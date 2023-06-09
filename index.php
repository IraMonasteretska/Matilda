<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Project</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="css/lib/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="main-wrapper">
            <section class="onboarding">
                <div class="onboarding__welcomescreen tab-screen welc active-tab">
                    <img class="onboarding__bg" src="img/Onboarding 1.png" alt="image">
                    <div class="onboarding__slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p>
                                    <?php __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis condimentum erat.', 'theme-domain')?>
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <p>
                                    <?php __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis condimentum erat.', 'theme-domain')?>
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <p>
                                    <?php __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis condimentum erat.', 'theme-domain')?>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <a href="#" class="onboarding__welcomescreen-login whitebtn tab-btn" data-tab="log">
                      <?php __('התחברות', 'theme-domain')?>
                    </a>
                    <div class="onboarding__welcomescreen-registration">
                        <a href="#" class="tab-btn" data-tab="registr"><?php __('הירשם', 'theme-domain')?></a>
                        <span><?php __('אין לך חשבון?', 'theme-domain')?></span>
                    </div>

                </div>

                <div class="onboarding__registration tab-screen registr">
                    <a href="#" class="onboarding__registration-back tab-btn" data-tab="welc">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.198869 7.48011C-0.0662898 7.21495 -0.0662898 6.78505 0.198869 6.51989L4.51989 2.19887C4.78505 1.93371 5.21495 1.93371 5.48011 2.19887C5.74527 2.46403 5.74527 2.89394 5.48011 3.1591L2.31819 6.32102H16.9746C17.3496 6.32102 17.6535 6.62501 17.6535 7C17.6535 7.37499 17.3496 7.67898 16.9746 7.67898H2.31819L5.48011 10.8409C5.74527 11.1061 5.74527 11.536 5.48011 11.8011C5.21495 12.0663 4.78505 12.0663 4.51989 11.8011L0.198869 7.48011Z"
                                fill="#13333E" />
                        </svg>
                    </a>
                    <h1 class="onboarding__registration-title">
                        <?php __('אין לך חשבון? תיצור את המשתמש שלך', 'theme-domain')?>
                    </h1>
                    <p class="onboarding__registration-subtitle">
                    <?php __('זה מהיר וקל', 'theme-domain')?>
                    </p>
                    <div class="onboarding__registration-form">
                        <div id="error-message">
                            <div class="error-close">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5_65)">
                                    <path
                                        d="M10 0C4.48357 0 0 4.48357 0 10C0 15.5164 4.48357 20 10 20C15.5164 20 20 15.5164 20 10C20 4.48357 15.5164 0 10 0ZM10 18.9906C5.04695 18.9906 1.00939 14.9531 1.00939 10C1.00939 5.04695 5.04695 1.00939 10 1.00939C14.9531 1.00939 18.9906 5.04695 18.9906 10C18.9906 14.9531 14.9531 18.9906 10 18.9906Z"
                                        fill="#942F1C" />
                                    <path
                                        d="M10.7042 9.95305L13.6385 7.01878C13.8263 6.83098 13.8263 6.50234 13.6385 6.31455C13.4507 6.12676 13.1221 6.12676 12.9343 6.31455L10 9.24882L7.06574 6.31455C6.87795 6.12676 6.54931 6.12676 6.36152 6.31455C6.17372 6.50234 6.17372 6.83098 6.36152 7.01878L9.29579 9.95305L6.36152 12.8638C6.17372 13.0516 6.17372 13.3803 6.36152 13.5681C6.45541 13.662 6.59626 13.7089 6.71363 13.7089C6.831 13.7089 6.97185 13.662 7.06574 13.5681L10 10.6338L12.9343 13.5681C13.0282 13.662 13.169 13.7089 13.2864 13.7089C13.4038 13.7089 13.5446 13.662 13.6385 13.5681C13.8263 13.3803 13.8263 13.0516 13.6385 12.8638L10.7042 9.95305Z"
                                        fill="#942F1C" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5_65">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            </div>
                            <?php __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'theme-domain')?>
                        </div>
                        <form>
                            <div class="inputfield">
                                <input type="text" placeholder="כינוי" required>
                            </div>
                            <div class="inputfield">
                                <input type="text" placeholder="אימות דואר אופציונלי">
                            </div>

                            <div class="inputfield__row">
                                <div class="checkfield">
                                    <input type="radio" class="custom-checkbox" id="f" required name="sex" value="f">
                                    <label for="f">F</label>
                                </div>
                                <div class="checkfield">
                                    <input type="radio" class="custom-checkbox" id="m" required name="sex" value="m">
                                    <label for="m">M</label>
                                </div>
                                <p>
                                <?php __('מִין', 'theme-domain')?>
                                </p>
                            </div>

                            <div class="inputfield hidepass">
                                <div class="toggle-password">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5789 3C6.59748 3 3.82714 5.29478 2.26794 7.54218C1.24847 9.01163 1.33202 10.9521 2.3902 12.394C4.01574 14.6088 6.78135 17 10.5789 17C14.7793 17 17.4862 14.0748 18.7363 11.6983C19.2975 10.6313 19.3113 9.36438 18.7639 8.29023C17.589 5.98507 14.9685 3 10.5789 3Z"
                                            stroke="#015B72" stroke-width="1.10526" />
                                        <circle cx="10.2105" cy="10" r="2.76316" stroke="#015B72"
                                            stroke-width="1.10526" />
                                    </svg>
                                </div>
                                <input class="password" type="password" placeholder="כינוי" required>
                            </div>
                            <div class="inputfield hidepass">
                                <div class="toggle-password">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5789 3C6.59748 3 3.82714 5.29478 2.26794 7.54218C1.24847 9.01163 1.33202 10.9521 2.3902 12.394C4.01574 14.6088 6.78135 17 10.5789 17C14.7793 17 17.4862 14.0748 18.7363 11.6983C19.2975 10.6313 19.3113 9.36438 18.7639 8.29023C17.589 5.98507 14.9685 3 10.5789 3Z"
                                            stroke="#015B72" stroke-width="1.10526" />
                                        <circle cx="10.2105" cy="10" r="2.76316" stroke="#015B72"
                                            stroke-width="1.10526" />
                                    </svg>
                                </div>
                                <input class="password" type="password" placeholder="אימות דואר אופציונלי" required>
                            </div>
                            <div class="checkfield terms">
                                <input type="checkbox" class="custom-checkbox" id="terms" value="yes">
                                <label for="terms"><?php __('אני מסכים לתנאים וההגבלות', 'theme-domain')?></label>
                            </div>
                            <button class="bluebtn" type="submit"><?php __('הירשם', 'theme-domain')?></button>
                        </form>
                        <a href="#" class="tab-btn" data-tab="log"><?php __('חזרה לכניסה', 'theme-domain')?></a>
                    </div>
                </div>

                <div class="onboarding__login tab-screen log">
                    <img class="onboarding__bg" src="img/Onboarding 1.png" alt="image">
                    <div class="onboarding__login-form">
                        <form>
                            <div class="inputfield log-name">
                                <label for="name"><?php __('שם משתמש', 'theme-domain')?></label>
                                <input type="text" id="name" required>
                            </div>
                            <div class="inputfield log-pass">
                                <label for="password"><?php __('קוד כניסה', 'theme-domain')?></label>
                                <input type="password" id="password" required>
                            </div>
                            <a href="#"><?php __('שכחת את הסיסמא?', 'theme-domain')?></a>
                            <button class="whitebtn" type="submit"><?php __('התחברות', 'theme-domain')?></button>
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </main>
    <script src="js/lib/jquery.js"></script>
    <script src="js/lib/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>