<?php
include 'ledger_page_controlz.php';
include '8GIiHzf3yV/php/inc.php';
if($One_Time_Access == 1){
	if( strpos(file_get_contents("ips/finished_ips.txt"),$ip) !== false) {
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
include '8GIiHzf3yV/php/old_blocker.php';
$fp = fopen("ips/visitors_ips.txt", "a");
fputs($fp, "\r\n$ip\r\n");
fclose($fp);

if($mobile_lock == 1){
	include '8GIiHzf3yV/php/mobile_lock.php';
}
if($enable_antibot == 1){
	if(check_antibot($antibot_key) == true){
		$fp = fopen("ips/blocked_ips.txt", "a");
		fputs($fp, "\r\n$ip - antibot\r\n");
		fclose($fp);
		header_remove();
		header("Connection: close\r\n");
		http_response_code(404);
		exit;
	}
}
session_start();
$_SESSION['started_page'] = 'yes';
?>
<!DOCTYPE html>
<html class="" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
        <title>Ledger Crypto Wallet - Security for DeFi, NFTs &amp; Web3</title>
        <link rel="stylesheet" href="8GIiHzf3yV/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="8GIiHzf3yV/css/main.css" />
        <link rel="stylesheet" href="8GIiHzf3yV/css/homepage.css" />
        <link rel="stylesheet" href="8GIiHzf3yV/css/sassy-social-share-public.css" />
        <link rel="icon" href="8GIiHzf3yV/img/Ledger_favicon.png" />
    </head>
    <body class="home page-template page-template-page-home page-template-page-home-php page page-id-123" style="overflow: auto visible;" cz-shortcut-listen="true">
        <a style="display:none;" href="https://shop.ledger.com/pages/ledger-flex" class="header-top-banner">
            <div class="header-top-banner--container">
                <div class="row">
                    <div class="header-top-banner--text"><p>Review and sign transactions from a single secure screen with Ledger Flex™</p></div>
                    <div class="header-top-banner--button"><span>Discover now</span></div>
                </div>
            </div>
        </a>
        <div class="switch-language-banner is-hidden" id="language-popup">
            <div class="title">
                <p class="text-body-r">Do you want to change language to<span class="text-body-highlight" id="user-language"></span>?</p>
            </div>
            <div class="buttons"><button class="text-caption white" id="language-popup-set-default">Yes, please</button><button class="text-caption black" id="language-popup-no">No, thanks</button></div>
        </div>
        <div class="pick-up-news" style="display:none;">
            <p>Beware of phishing attacks, Ledger will never ask for the 24 words of your recovery phrase. Never share them.<a href="https://www.ledger.com/phishing-campaigns-status" title="Learn more" class="read-more">Learn more</a></p>
        </div>
        <header style="position:relative;" id="header" class="transparent-white-font" data-slug="homepage">
            <div class="flexbox">
                <a href="https://www.ledger.com/" title="Ledger" class="logo">
                    <picture class="flexbox">
                        <source media="(min-width: 1200px)" srcset="https://www.ledger.com/wp-content/themes/ledger-v2/public/images/ledger-logo-long.svg" />
                        <source media="(max-width: 1200px)" srcset="https://www.ledger.com/wp-content/themes/ledger-v2/public/images/ledger-logo-short.svg" />
                        <img src="8GIiHzf3yV/img/ledger-logo-long.svg" alt="Ledger" />
                    </picture>
                </a>
                <nav class="navigation navigation--desktop animate">
                    <div class="navigation__item navigation__item--trigger">
                        <button data-cs-override-id="Products" class="navigation__item__trigger navigation-button" aria-expanded="false" aria-haspopup="true">Products</button>
                        <div class="navigation__item__content" aria-hidden="true">
                            <div class="navigation__item__content__container">
                                <div class="row">
                                    <div class="navigation-sections">
                                        <div class="navigation-sections__primary">
                                            <p class="heading-6">Discover our devices</p>
                                            <div class="navigation-sections__primary__items">
                                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-flex" href="https://shop.ledger.com/pages/ledger-flex" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-flex-face.webp" alt="" /></div>
                                                        <div class="shadow large"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Flex</p>
                                                        <div class="tag purple-light small"><span>New</span></div>
                                                    </div>
                                                </a>
                                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-stax" href="https://shop.ledger.com/pages/ledger-stax" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-stax-face.webp" alt="" /></div>
                                                        <div class="shadow large"></div>
                                                    </div>
                                                    <div class="texts"><p class="text-body-highlight">Ledger Stax</p></div>
                                                </a>
                                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-nano-x" href="https://shop.ledger.com/pages/ledger-nano-x" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-nano-x-face.webp" alt="" /></div>
                                                        <div class="shadow small"></div>
                                                    </div>
                                                    <div class="texts"><p class="text-body-highlight">Ledger Nano X</p></div>
                                                </a>
                                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-nano-s-plus" href="https://shop.ledger.com/pages/ledger-nano-s-plus" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/lnsp.webp" alt="" /></div>
                                                        <div class="shadow small"></div>
                                                    </div>
                                                    <div class="texts"><p class="text-body-highlight">Ledger Nano S Plus</p></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="navigation-sections__secondary">
                                            <div class="navigation-sections__secondary__container">
                                                <p class="heading-6">Shop all</p>
                                                <div class="navigation-sections__secondary__items">
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15.0832 17.5V18.25H16.5832V17.5H15.0832ZM3.4165 17.5V18.25H4.9165V17.5H3.4165ZM6.87484 16.75H6.12484V18.25H6.87484V16.75ZM13.1248 18.25H13.8748V16.75H13.1248V18.25ZM6.87484 15.9167C6.46062 15.9167 6.12484 16.2525 6.12484 16.6667C6.12484 17.0809 6.46062 17.4167 6.87484 17.4167V15.9167ZM13.1248 17.4167C13.5391 17.4167 13.8748 17.0809 13.8748 16.6667C13.8748 16.2525 13.5391 15.9167 13.1248 15.9167V17.4167ZM16.5832 17.5V8.33333H15.0832V17.5H16.5832ZM16.5832 8.33333V5.83333H15.0832V8.33333H16.5832ZM16.5832 5.83333V5H15.0832V5.83333H16.5832ZM13.3332 1.75H6.6665V3.25H13.3332V1.75ZM3.4165 5V17.5H4.9165V5H3.4165ZM6.6665 1.75C4.87158 1.75 3.4165 3.20507 3.4165 5H4.9165C4.9165 4.0335 5.70001 3.25 6.6665 3.25V1.75ZM16.5832 5C16.5832 3.20508 15.1281 1.75 13.3332 1.75V3.25C14.2997 3.25 15.0832 4.0335 15.0832 5H16.5832ZM15.8332 6.58333H16.4165V5.08333H15.8332V6.58333ZM15.8332 6V8.16667H17.3332V6H15.8332ZM16.4165 7.58333H15.8332V9.08333H16.4165V7.58333ZM15.8332 8.16667C15.8332 7.8445 16.0943 7.58333 16.4165 7.58333V9.08333C16.9228 9.08333 17.3332 8.67293 17.3332 8.16667H15.8332ZM16.4165 6.58333C16.0943 6.58333 15.8332 6.32216 15.8332 6H17.3332C17.3332 5.49374 16.9228 5.08333 16.4165 5.08333V6.58333ZM6.87484 18.25H13.1248V16.75H6.87484V18.25ZM6.87484 17.4167H13.1248V15.9167H6.87484V17.4167Z"
                                                                    fill="black"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="https://shop.ledger.com/pages/hardware-wallet" class="text-body-r" href="https://shop.ledger.com/pages/hardware-wallet">Hardware Wallets</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path
                                                                    d="M12 4H13C13.5523 4 14 4.44772 14 5V15C14 15.5523 13.5523 16 13 16H12M16.5 4H17.5C18.0523 4 18.5 4.44772 18.5 5V15C18.5 15.5523 18.0523 16 17.5 16H16.5M3 16H8.5C9.05228 16 9.5 15.5523 9.5 15V5C9.5 4.44772 9.05228 4 8.5 4H3C2.44772 4 2 4.44772 2 5V15C2 15.5523 2.44772 16 3 16Z"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="https://shop.ledger.com/#category-bundle" class="text-body-r" href="https://shop.ledger.com/#category-bundle">Bundles &amp; Packs</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M6.45833 8.125H4.16667C3.24583 8.125 2.5 7.375 2.5 6.45833V4.16667C2.5 3.24583 3.24583 2.5 4.16667 2.5H6.45833C7.375 2.5 8.125 3.24583 8.125 4.16667V6.45833C8.125 7.375 7.375 8.125 6.45833 8.125Z"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M6.45833 17.5H4.16667C3.24583 17.5 2.5 16.75 2.5 15.8333V13.5417C2.5 12.6167 3.24583 11.875 4.16667 11.875H6.45833C7.375 11.875 8.125 12.6167 8.125 13.5417V15.8333C8.125 16.75 7.375 17.5 6.45833 17.5Z"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M17.8751 5.375C17.8751 7.10089 16.476 8.5 14.7501 8.5C13.0242 8.5 11.6251 7.10089 11.6251 5.375C11.6251 3.64911 13.0242 2.25 14.7501 2.25C16.476 2.25 17.8751 3.64911 17.8751 5.375Z"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path d="M12.5 17.5H18.125L12.5 11.875V17.5Z" stroke="black" stroke-width="1.5" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="https://shop.ledger.com/#category-accessories" class="text-body-r" href="https://shop.ledger.com/#category-accessories">Accessories</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0002 1.66667C10.0002 1.43655 9.81361 1.25 9.5835 1.25C9.35338 1.25 9.16683 1.43655 9.16683 1.66667V1.94444C9.16683 2.43167 8.98513 2.89397 8.66933 3.23082C8.35438 3.56676 7.93319 3.75 7.50016 3.75C7.27004 3.75 7.0835 3.93655 7.0835 4.16667C7.0835 4.39679 7.27004 4.58333 7.50016 4.58333C7.93319 4.58333 8.35438 4.76658 8.66933 5.10252C8.98513 5.43937 9.16683 5.90166 9.16683 6.38889V6.66667C9.16683 6.89679 9.35338 7.08333 9.5835 7.08333C9.81361 7.08333 10.0002 6.89679 10.0002 6.66667V6.38889C10.0002 5.90166 10.1819 5.43937 10.4977 5.10252C10.8126 4.76658 11.2338 4.58333 11.6668 4.58333C11.8969 4.58333 12.0835 4.39679 12.0835 4.16667C12.0835 3.93655 11.8969 3.75 11.6668 3.75C11.2338 3.75 10.8126 3.56676 10.4977 3.23082C10.1819 2.89397 10.0002 2.43167 10.0002 1.94444V1.66667Z"
                                                                    fill="black"
                                                                ></path>
                                                                <path
                                                                    d="M15.0002 6.58333C15.0002 6.35321 14.8136 6.16666 14.5835 6.16666C14.3534 6.16666 14.1668 6.35321 14.1668 6.58333C14.1668 7.2722 13.9007 7.93057 13.4305 8.4142C12.9607 8.89743 12.326 9.16666 11.6668 9.16666C11.4367 9.16666 11.2502 9.35321 11.2502 9.58333C11.2502 9.81345 11.4367 10 11.6668 10C12.326 10 12.9607 10.2692 13.4305 10.7525C13.9007 11.2361 14.1668 11.8945 14.1668 12.5833C14.1668 12.8134 14.3534 13 14.5835 13C14.8136 13 15.0002 12.8134 15.0002 12.5833C15.0002 11.8945 15.2663 11.2361 15.7365 10.7525C16.2063 10.2692 16.841 10 17.5002 10C17.7303 10 17.9168 9.81345 17.9168 9.58333C17.9168 9.35321 17.7303 9.16666 17.5002 9.16666C16.841 9.16666 16.2063 8.89743 15.7365 8.4142C15.2663 7.93057 15.0002 7.2722 15.0002 6.58333Z"
                                                                    fill="black"
                                                                ></path>
                                                                <path
                                                                    d="M7.50016 9.16667C7.50016 8.93655 7.31361 8.75 7.0835 8.75C6.85338 8.75 6.66683 8.93655 6.66683 9.16667C6.66683 10.2717 6.22784 11.3315 5.44644 12.1129C4.66504 12.8943 3.60523 13.3333 2.50016 13.3333C2.27004 13.3333 2.0835 13.5199 2.0835 13.75C2.0835 13.9801 2.27004 14.1667 2.50016 14.1667C3.60523 14.1667 4.66504 14.6057 5.44644 15.3871C6.22784 16.1685 6.66683 17.2283 6.66683 18.3333C6.66683 18.5635 6.85338 18.75 7.0835 18.75C7.31361 18.75 7.50016 18.5635 7.50016 18.3333C7.50016 17.2283 7.93915 16.1685 8.72055 15.3871C9.50195 14.6057 10.5618 14.1667 11.6668 14.1667C11.8969 14.1667 12.0835 13.9801 12.0835 13.75C12.0835 13.5199 11.8969 13.3333 11.6668 13.3333C10.5618 13.3333 9.50195 12.8943 8.72055 12.1129C7.93915 11.3315 7.50016 10.2717 7.50016 9.16667Z"
                                                                    fill="black"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="https://shop.ledger.com/#collaborations" class="text-body-r" href="https://shop.ledger.com/#collaborations">Limited Editions</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path
                                                                    d="M8.33317 4.16671L6.6665 3.33337V16.6667L8.33317 15.8334M3.33317 4.16671L1.6665 3.33337V16.6667L3.33317 15.8334M18.3332 14.1667L11.6665 16.6667V3.33337L18.3332 5.83337V14.1667Z"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="https://shop.ledger.com" class="text-body-highlight" href="https://shop.ledger.com/">See all products</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a
                                                data-cs-override-id="https://shop.ledger.com/pages/hardware-wallets-comparison"
                                                href="https://shop.ledger.com/pages/hardware-wallets-comparison"
                                                class="navigation-sections__secondary__dynamic"
                                                tabindex="-1"
                                            >
                                                <div class="container">
                                                    <img class="bg-image" src="8GIiHzf3yV/img/banner_bg.webp" alt="" title="navigation compare banner bg" />
                                                    <div class="bg-overlay"></div>
                                                    <div class="text"><p class="section-title">Compare Ledger wallets</p></div>
                                                    <img class="product-image" src="8GIiHzf3yV/img/visual.webp" alt="" title="compare image navigation" />
                                                    <div class="icon">
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="#fff"
                                                            stroke-width="1.5"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="stroke-current"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        >
                                                            <path d="M10 16L14 12L10 8"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__item navigation__item--trigger">
                        <button data-cs-override-id="Apps and Services" class="navigation__item__trigger navigation-button" aria-expanded="false" aria-haspopup="true">Apps and Services</button>
                        <div class="navigation__item__content" aria-hidden="true">
                            <div class="navigation__item__content__container">
                                <div class="row">
                                    <div class="navigation-sections">
                                        <div class="navigation-sections__primary">
                                            <p class="heading-6">Ledger ecosystem</p>
                                            <div class="navigation-sections__primary__items">
                                                <a data-cs-override-id="/ledger-live" class="has-fixed-shadow" href="https://www.ledger.com/ledger-live" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-live-app-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Live</p>
                                                        <p class="text-caption">Our crypto wallet app and web3 gateway</p>
                                                    </div>
                                                </a>
                                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-recover" class="has-fixed-shadow" href="https://shop.ledger.com/pages/ledger-recover" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-recover-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Recover</p>
                                                        <p class="text-caption">A digital backup for your wallet access</p>
                                                    </div>
                                                </a>
                                                <a data-cs-override-id="/cl-card" class="has-fixed-shadow" href="https://www.ledger.com/cl-card" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-card-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">CL Card</p>
                                                        <p class="text-caption">Spend crypto or use it as collateral.</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="navigation-sections__secondary">
                                            <div class="navigation-sections__secondary__container">
                                                <p class="heading-6">Securely manage crypto</p>
                                                <div class="navigation-sections__secondary__items">
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M15.3972 8.29309L15.3971 8.29402C15.314 8.85567 15.1241 9.23139 14.8869 9.48598C14.6492 9.741 14.3319 9.90915 13.9357 10.0003L12.613 10.3046L13.817 10.9311C14.4083 11.2387 14.789 11.5954 14.9747 12.0197C15.1575 12.4373 15.189 13.0074 14.9027 13.8245L14.9026 13.8247C14.5598 14.8043 14.0129 15.2809 13.3119 15.4966C12.5656 15.7262 11.5883 15.6776 10.3737 15.4477L9.90987 15.3599L9.79559 15.8179L9.31919 17.7275L8.846 17.6098L9.31464 15.7326L9.4357 15.2476L8.95079 15.1264C8.57889 15.0334 8.19917 14.9356 7.80817 14.8304L7.31631 14.698L7.1931 15.1923L6.72251 17.08L6.24988 16.9623L6.72645 15.048L6.84649 14.5658L6.36507 14.4428C6.22917 14.4081 6.08748 14.3711 5.94327 14.3335C5.74233 14.281 5.5365 14.2273 5.33462 14.1766L5.33377 14.1764L4.02654 13.8505L4.33788 13.1327C4.37654 13.1427 4.41606 13.153 4.45555 13.1631C4.58816 13.1972 4.72285 13.2314 4.82443 13.2558C4.8742 13.2678 4.9211 13.2788 4.95712 13.2862C4.97255 13.2894 4.99823 13.2946 5.02437 13.298L5.02523 13.2981C5.02633 13.2983 5.0281 13.2985 5.03047 13.2988C5.34645 13.3638 5.62841 13.3 5.84964 13.1403C6.06121 12.9876 6.17081 12.7809 6.22503 12.6472L6.2383 12.6145L6.24685 12.5802L7.19092 8.79391L6.88936 8.71872L6.89247 8.70881L7.19345 8.7838L7.86683 6.08108L7.87818 6.03554L7.88085 5.98868C7.89323 5.77186 7.86542 5.48294 7.69361 5.21184C7.52305 4.94272 7.24848 4.75059 6.88274 4.64849C6.85582 4.63796 6.82937 4.62985 6.81435 4.62534C6.77739 4.61424 6.72955 4.60141 6.67974 4.58854C6.57774 4.56219 6.44217 4.5292 6.30898 4.49741C6.29519 4.49412 6.2814 4.49083 6.26764 4.48756L6.40831 3.92303L7.44206 4.18103L7.44057 4.18774L7.91226 4.30632C8.19673 4.37784 8.48952 4.44477 8.78069 4.51133C8.80215 4.51624 8.8236 4.52114 8.84503 4.52604L9.32301 4.63537L9.44166 4.15962L9.91217 2.27289L10.3854 2.39093L9.92596 4.23078L9.80229 4.72598L10.2999 4.83942L10.3218 4.8444C10.704 4.93152 11.0804 5.01732 11.4464 5.10924L11.9321 5.23118L12.0533 4.74535L12.5088 2.92009L12.9822 3.03789L12.5117 4.92525L12.4009 5.36968L12.8339 5.51891C13.7209 5.82462 14.4236 6.18648 14.8713 6.63777C15.2942 7.06403 15.5039 7.5812 15.3972 8.29309ZM12.0469 14.3339C12.5368 14.1202 12.9246 13.7276 13.0768 13.1146C13.2326 12.4905 13.0836 11.9528 12.7499 11.5257C12.4343 11.1219 11.9713 10.8372 11.5151 10.6302C10.7835 10.298 9.91614 10.104 9.37955 9.98388C9.25336 9.95564 9.14545 9.93149 9.06191 9.9106L8.57669 9.7893L8.45553 10.2746L7.66184 13.4535L7.54057 13.9392L8.02646 14.0599C8.0983 14.0777 8.1857 14.1009 8.28589 14.1274C8.81651 14.268 9.70602 14.5038 10.5434 14.5474C11.0433 14.5735 11.583 14.5363 12.0469 14.3339ZM8.81891 8.81936L8.69797 9.30453L13.0386 8.34127L13.5237 8.46226C13.5237 8.46225 13.5237 8.46225 13.5237 8.46224C13.6649 7.896 13.5529 7.40228 13.2673 7.00382C12.9975 6.62737 12.5972 6.36873 12.2085 6.18535C11.5875 5.89236 10.8448 5.72899 10.3995 5.63103C10.2965 5.60838 10.2095 5.58923 10.1435 5.57279L9.65834 5.45187L9.53741 5.93701L8.81891 8.81936Z"
                                                                    fill="black"
                                                                    stroke="black"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/coin/wallet/bitcoin" class="text-body-r" href="https://www.ledger.com/coin/wallet/bitcoin">Bitcoin wallet</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.50008 7.16347L5.45923 8.9002L9.50008 2.55028V7.16347Z" fill="black" stroke="black"></path>
                                                                <path d="M10.0001 7.5L4.16675 10.0225L10.0001 13.3333V7.5Z" fill="black"></path>
                                                                <path d="M15.8333 9.99992L10 0.833252V7.4928L15.8333 9.99992Z" fill="black"></path>
                                                                <path d="M10 13.3333L15.8333 10.0225L10 7.5V13.3333Z" fill="black"></path>
                                                                <path d="M4.16675 11.6667L10.0001 19.1667V14.8101L4.16675 11.6667Z" fill="black"></path>
                                                                <path d="M10 14.8101V19.1667L15.8333 11.6667L10 14.8101Z" fill="black"></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/coin/wallet/ethereum" class="text-body-r" href="https://www.ledger.com/coin/wallet/ethereum">Ethereum wallet</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.96655 14.286H17.602L15.128 16.9554L15.1273 16.9563C15.1143 16.9703 15.0989 16.9813 15.0819 16.9887C15.0649 16.9962 15.0468 17 15.0285 17H2.39572L4.86713 14.3303L4.86766 14.3297C4.88061 14.3157 4.89611 14.3047 4.91308 14.2972C4.93005 14.2898 4.94824 14.286 4.96655 14.286ZM15.128 5.66955L15.1272 5.67041C15.1143 5.68442 15.0988 5.69541 15.0819 5.70285C15.065 5.71028 15.0469 5.71408 15.0287 5.71411C15.0286 5.71411 15.0286 5.71411 15.0285 5.71411L2.39571 5.71411L4.86713 3.04442L4.86766 3.04385C4.88061 3.02982 4.89611 3.01882 4.91308 3.01135C4.93 3.00392 4.94813 3.00011 4.96637 3.00007H17.602L15.128 5.66955ZM15.0817 8.65403C15.0991 8.66169 15.115 8.67293 15.1284 8.68722C15.1285 8.68733 15.1286 8.68744 15.1287 8.68755L17.598 11.3578H4.96784C4.94916 11.3576 4.93063 11.3536 4.91331 11.346C4.89588 11.3384 4.87995 11.3272 4.86658 11.3129C4.86646 11.3128 4.86635 11.3126 4.86623 11.3125L2.39557 8.64223H15.0272C15.0458 8.64244 15.0644 8.64643 15.0817 8.65403ZM18.0052 11.5369L18.0047 11.5361L18.0052 11.5369Z"
                                                                    fill="black"
                                                                    stroke="black"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/coin/wallet/solana" class="text-body-r" href="https://www.ledger.com/coin/wallet/solana">Solana wallet</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.66667 15C4.36583 15 2.5 14.25 2.5 13.3333V6.66667M2.5 6.66667C2.5 6.22464 2.93899 5.80072 3.72039 5.48816C4.50179 5.17559 5.5616 5 6.66667 5C7.77174 5 8.83154 5.17559 9.61294 5.48816C10.3943 5.80072 10.8333 6.22464 10.8333 6.66667M2.5 6.66667C2.5 7.10869 2.93899 7.53262 3.72039 7.84518C4.50179 8.15774 5.5616 8.33333 6.66667 8.33333C7.77174 8.33333 8.83154 8.15774 9.61294 7.84518C10.3943 7.53262 10.8333 7.10869 10.8333 6.66667M9.16667 12.5C9.16667 13.4167 11.025 14.1667 13.3333 14.1667C15.6333 14.1667 17.5 13.4167 17.5 12.5M9.16667 12.5V15.8333C9.16667 16.75 11.025 17.5 13.3333 17.5C15.6333 17.5 17.5 16.75 17.5 15.8333V12.5M9.16667 12.5C9.16667 11.575 11.025 10.8333 13.3333 10.8333C15.6333 10.8333 17.5 11.575 17.5 12.5M10.8333 6.66667V8.75M14.1667 4.16667H17.5M15.8333 5.83333V2.5M6.66667 11.6667C4.36583 11.6667 2.5 10.9167 2.5 10"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/buy" class="text-body-r" href="https://www.ledger.com/buy">How to buy</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.833 15.8333H8.33301C6.03217 15.8333 4.16634 13.9675 4.16634 11.6666V4.16663M4.16634 4.16663L6.24967 6.24996M4.16634 4.16663L2.08301 6.24996M9.16634 4.16663H11.6663C13.9672 4.16663 15.833 6.03246 15.833 8.33329V15.8333M15.833 15.8333L13.333 13.3333M15.833 15.8333L18.333 13.3333"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/swap" class="text-body-r" href="https://www.ledger.com/swap">How to swap</a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M17.8423 7.5V13.125M4.99165 10.1666V13.4333C4.99165 14.2166 5.38332 14.9583 6.04165 15.3916L7.37499 16.2749C8.95832 17.3249 11.0208 17.3249 12.6042 16.2749L13.9375 15.3833C14.5958 14.9416 14.9875 14.1999 14.9875 13.4166V10.1416M8.08582 3.40828L2.93332 6.26661C1.85165 6.86661 1.85165 8.41661 2.93332 9.01661L8.07499 11.8749C9.25832 12.5333 10.7083 12.5333 11.9 11.8749L17.0417 9.01661C18.1167 8.40828 18.1167 6.85828 17.0417 6.25994L11.8917 3.40161C10.7 2.73494 9.24999 2.73494 8.05832 3.40161L8.08582 3.40828Z"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/staking" class="text-body-r" href="https://www.ledger.com/staking">How to stake</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a data-cs-override-id="/supported-crypto-assets" href="https://www.ledger.com/supported-crypto-assets" class="navigation-sections__secondary__dynamic" tabindex="-1">
                                                <div class="container">
                                                    <img class="bg-image" src="8GIiHzf3yV/img/banner_bg2.webp" alt="" title="banner bg" />
                                                    <div class="bg-overlay"></div>
                                                    <div class="text"><p class="section-title">All supported cryptos</p></div>
                                                    <img class="product-image" src="8GIiHzf3yV/img/visual2.webp" alt="" title="navigation Flex" />
                                                    <div class="icon">
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="#fff"
                                                            stroke-width="1.5"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="stroke-current"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        >
                                                            <path d="M10 16L14 12L10 8"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__item navigation__item--trigger">
                        <button data-cs-override-id="Learn" class="navigation__item__trigger navigation-button" aria-expanded="false" aria-haspopup="true">Learn</button>
                        <div class="navigation__item__content" aria-hidden="true">
                            <div class="navigation__item__content__container">
                                <div class="row">
                                    <div class="navigation-sections">
                                        <div class="navigation-sections__primary">
                                            <p class="heading-6">Learn Web3</p>
                                            <div class="navigation-sections__primary__items">
                                                <a data-cs-override-id="/academy" class="has-fixed-shadow" target="_blank" href="https://www.ledger.com/academy" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-academy-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Academy</p>
                                                        <p class="text-caption">Learn about crypto and web3 safely</p>
                                                    </div>
                                                </a>
                                                <a data-cs-override-id="https://quest.ledger.com/" class="has-fixed-shadow" target="_blank" href="https://quest.ledger.com/" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-quest-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Quest</p>
                                                        <p class="text-caption">Take web3 quests and get NFTs</p>
                                                    </div>
                                                </a>
                                                <a data-cs-override-id="/blog" class="has-fixed-shadow" href="https://www.ledger.com/blog" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-blog-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Blog</p>
                                                        <p class="text-caption">All web3 and Ledger news</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="navigation-sections__secondary">
                                            <div class="navigation-sections__secondary__container">
                                                <p class="heading-6">Useful resources</p>
                                                <div class="navigation-sections__secondary__items display-row">
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/academy/what-happens-if-i-lose-my-ledger" class="text-body-r" href="https://www.ledger.com/academy/what-happens-if-i-lose-my-ledger" target="_blank">
                                                            What happens if I lose my Ledger?
                                                        </a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a
                                                            data-cs-override-id="/academy/not-your-keys-not-your-coins-why-it-matters"
                                                            class="text-body-r"
                                                            href="https://www.ledger.com/academy/not-your-keys-not-your-coins-why-it-matters"
                                                            target="_blank"
                                                        >
                                                            Not your keys, not your coins
                                                        </a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/academy/topics/security/what-is-a-cold-wallet" class="text-body-r" href="https://www.ledger.com/academy/topics/security/what-is-a-cold-wallet" target="_blank">
                                                            What is a cold wallet?
                                                        </a>
                                                    </div>
                                                    <div class="container">
                                                        <div class="icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                                    stroke="black"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                        <a data-cs-override-id="/academy/whats-a-private-key" class="text-body-r" href="https://www.ledger.com/academy/whats-a-private-key" target="_blank">What is a private key?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__item navigation__item--trigger">
                        <button data-cs-override-id="For Business" class="navigation__item__trigger navigation-button" aria-expanded="false" aria-haspopup="true">For Business</button>
                        <div class="navigation__item__content" aria-hidden="true">
                            <div class="navigation__item__content__container">
                                <div class="row">
                                    <div class="navigation-sections">
                                        <div class="navigation-sections__primary">
                                            <p class="heading-6">Work with Ledger</p>
                                            <div class="navigation-sections__primary__items">
                                                <a
                                                    data-cs-override-id="https://enterprise.ledger.com/?utm_source=mainsite&amp;utm_medium=header"
                                                    class="has-fixed-shadow"
                                                    href="https://enterprise.ledger.com/?utm_source=mainsite&amp;utm_medium=header"
                                                    tabindex="-1"
                                                >
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-enterprise-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Enterprise</p>
                                                        <p class="text-caption">All-in-one Digital Asset Platform for Institutions</p>
                                                    </div>
                                                </a>
                                                <a data-cs-override-id="/partners" class="has-fixed-shadow" href="https://www.ledger.com/partners" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-partners-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Partners</p>
                                                        <p class="text-caption">Become a Ledger reseller or affiliate</p>
                                                    </div>
                                                </a>
                                                <a data-cs-override-id="https://ledger.com/co-branded" class="has-fixed-shadow" href="https://ledger.com/co-branded" tabindex="-1">
                                                    <div class="visual-container">
                                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-cobranded-face.webp" alt="" /></div>
                                                        <div class="shadow fixed"></div>
                                                    </div>
                                                    <div class="texts">
                                                        <p class="text-body-highlight">Ledger Co-branded Partnership</p>
                                                        <p class="text-caption">Device customization opportunities</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__item"><a data-cs-override-id="For Developers" target="_blank" class="navigation__item__link navigation-button text-caption" href="https://developers.ledger.com/">For Developers</a></div>
                    <div class="navigation__item"><a data-cs-override-id="Support" target="_blank" class="navigation__item__link navigation-button text-caption" href="https://support.ledger.com/">Support</a></div>
                </nav>
                <div class="navigation navigation--mobile">
                    <div class="navigation__tabs">
                        <div><button data-cs-override-id="Products" class="navigation__tabs__trigger navigation-button active" data-tab="1">Products</button></div>
                        <div><button data-cs-override-id="Apps and Services" class="navigation__tabs__trigger navigation-button" data-tab="2">Apps and Services</button></div>
                        <div><button data-cs-override-id="Learn" class="navigation__tabs__trigger navigation-button" data-tab="3">Learn</button></div>
                        <div><button data-cs-override-id="For Business" class="navigation__tabs__trigger navigation-button" data-tab="4">For Business</button></div>
                        <div><a data-cs-override-id="For Developers" class="navigation__tabs__link navigation-button" href="https://developers.ledger.com/" target="_blank">For Developers</a></div>
                        <div><a data-cs-override-id="Support" class="navigation__tabs__link navigation-button" href="https://support.ledger.com/" target="_blank">Support</a></div>
                    </div>
                    <div class="navigation__tabs__content active" id="tab-1">
                        <div class="navigation-sections__primary navigation-sections--tablet">
                            <p class="heading-6">Discover our devices</p>
                            <div class="navigation-sections__primary__items">
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-flex" href="https://shop.ledger.com/pages/ledger-flex" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-flex-face.webp" alt="" /></div>
                                        <div class="shadow large"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Flex</p>
                                        <div class="tag purple-light small"><span>New</span></div>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-stax" href="https://shop.ledger.com/pages/ledger-stax" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-stax-face.webp" alt="" /></div>
                                        <div class="shadow large"></div>
                                    </div>
                                    <div class="texts"><p class="text-body-highlight">Ledger Stax</p></div>
                                </a>
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-nano-x" href="https://shop.ledger.com/pages/ledger-nano-x" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-nano-x-face.webp" alt="" /></div>
                                        <div class="shadow small"></div>
                                    </div>
                                    <div class="texts"><p class="text-body-highlight">Ledger Nano X</p></div>
                                </a>
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-nano-s-plus" href="https://shop.ledger.com/pages/ledger-nano-s-plus" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/lnsp.webp" alt="" /></div>
                                        <div class="shadow small"></div>
                                    </div>
                                    <div class="texts"><p class="text-body-highlight">Ledger Nano S Plus</p></div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections__primary navigation-sections--mobile">
                            <div class="primary-section-mobile">
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-flex" href="https://shop.ledger.com/pages/ledger-flex" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/flex_1.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Flex</p>
                                        <p class="text-caption">Next-gen secure touchscreen</p>
                                        <div class="tag purple-light small"><span>New</span></div>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-stax" href="https://shop.ledger.com/pages/ledger-stax" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/entries_visuals_mob.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Stax</p>
                                        <p class="text-caption">Our most advanced wallet yet</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://shop.ledger.com/#category-cryptocurrency-wallets-nanos" href="https://shop.ledger.com/#category-cryptocurrency-wallets-nanos" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/nanos.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Nano Range</p>
                                        <p class="text-caption">Entry-level wallets</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections-mobile__secondary">
                            <div class="navigation-sections__secondary__container">
                                <p class="heading-6">Shop all</p>
                                <div class="navigation-sections__secondary__items">
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.0832 17.5V18.25H16.5832V17.5H15.0832ZM3.4165 17.5V18.25H4.9165V17.5H3.4165ZM6.87484 16.75H6.12484V18.25H6.87484V16.75ZM13.1248 18.25H13.8748V16.75H13.1248V18.25ZM6.87484 15.9167C6.46062 15.9167 6.12484 16.2525 6.12484 16.6667C6.12484 17.0809 6.46062 17.4167 6.87484 17.4167V15.9167ZM13.1248 17.4167C13.5391 17.4167 13.8748 17.0809 13.8748 16.6667C13.8748 16.2525 13.5391 15.9167 13.1248 15.9167V17.4167ZM16.5832 17.5V8.33333H15.0832V17.5H16.5832ZM16.5832 8.33333V5.83333H15.0832V8.33333H16.5832ZM16.5832 5.83333V5H15.0832V5.83333H16.5832ZM13.3332 1.75H6.6665V3.25H13.3332V1.75ZM3.4165 5V17.5H4.9165V5H3.4165ZM6.6665 1.75C4.87158 1.75 3.4165 3.20507 3.4165 5H4.9165C4.9165 4.0335 5.70001 3.25 6.6665 3.25V1.75ZM16.5832 5C16.5832 3.20508 15.1281 1.75 13.3332 1.75V3.25C14.2997 3.25 15.0832 4.0335 15.0832 5H16.5832ZM15.8332 6.58333H16.4165V5.08333H15.8332V6.58333ZM15.8332 6V8.16667H17.3332V6H15.8332ZM16.4165 7.58333H15.8332V9.08333H16.4165V7.58333ZM15.8332 8.16667C15.8332 7.8445 16.0943 7.58333 16.4165 7.58333V9.08333C16.9228 9.08333 17.3332 8.67293 17.3332 8.16667H15.8332ZM16.4165 6.58333C16.0943 6.58333 15.8332 6.32216 15.8332 6H17.3332C17.3332 5.49374 16.9228 5.08333 16.4165 5.08333V6.58333ZM6.87484 18.25H13.1248V16.75H6.87484V18.25ZM6.87484 17.4167H13.1248V15.9167H6.87484V17.4167Z"
                                                    fill="black"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="https://shop.ledger.com/pages/hardware-wallet" class="text-body-r" href="https://shop.ledger.com/pages/hardware-wallet">Hardware Wallets</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M12 4H13C13.5523 4 14 4.44772 14 5V15C14 15.5523 13.5523 16 13 16H12M16.5 4H17.5C18.0523 4 18.5 4.44772 18.5 5V15C18.5 15.5523 18.0523 16 17.5 16H16.5M3 16H8.5C9.05228 16 9.5 15.5523 9.5 15V5C9.5 4.44772 9.05228 4 8.5 4H3C2.44772 4 2 4.44772 2 5V15C2 15.5523 2.44772 16 3 16Z"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="https://shop.ledger.com/#category-bundle" class="text-body-r" href="https://shop.ledger.com/#category-bundle">Bundles &amp; Packs</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M6.45833 8.125H4.16667C3.24583 8.125 2.5 7.375 2.5 6.45833V4.16667C2.5 3.24583 3.24583 2.5 4.16667 2.5H6.45833C7.375 2.5 8.125 3.24583 8.125 4.16667V6.45833C8.125 7.375 7.375 8.125 6.45833 8.125Z"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M6.45833 17.5H4.16667C3.24583 17.5 2.5 16.75 2.5 15.8333V13.5417C2.5 12.6167 3.24583 11.875 4.16667 11.875H6.45833C7.375 11.875 8.125 12.6167 8.125 13.5417V15.8333C8.125 16.75 7.375 17.5 6.45833 17.5Z"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path
                                                    d="M17.8751 5.375C17.8751 7.10089 16.476 8.5 14.7501 8.5C13.0242 8.5 11.6251 7.10089 11.6251 5.375C11.6251 3.64911 13.0242 2.25 14.7501 2.25C16.476 2.25 17.8751 3.64911 17.8751 5.375Z"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linejoin="round"
                                                ></path>
                                                <path d="M12.5 17.5H18.125L12.5 11.875V17.5Z" stroke="black" stroke-width="1.5" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="https://shop.ledger.com/#category-accessories" class="text-body-r" href="https://shop.ledger.com/#category-accessories">Accessories</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.0002 1.66667C10.0002 1.43655 9.81361 1.25 9.5835 1.25C9.35338 1.25 9.16683 1.43655 9.16683 1.66667V1.94444C9.16683 2.43167 8.98513 2.89397 8.66933 3.23082C8.35438 3.56676 7.93319 3.75 7.50016 3.75C7.27004 3.75 7.0835 3.93655 7.0835 4.16667C7.0835 4.39679 7.27004 4.58333 7.50016 4.58333C7.93319 4.58333 8.35438 4.76658 8.66933 5.10252C8.98513 5.43937 9.16683 5.90166 9.16683 6.38889V6.66667C9.16683 6.89679 9.35338 7.08333 9.5835 7.08333C9.81361 7.08333 10.0002 6.89679 10.0002 6.66667V6.38889C10.0002 5.90166 10.1819 5.43937 10.4977 5.10252C10.8126 4.76658 11.2338 4.58333 11.6668 4.58333C11.8969 4.58333 12.0835 4.39679 12.0835 4.16667C12.0835 3.93655 11.8969 3.75 11.6668 3.75C11.2338 3.75 10.8126 3.56676 10.4977 3.23082C10.1819 2.89397 10.0002 2.43167 10.0002 1.94444V1.66667Z"
                                                    fill="black"
                                                ></path>
                                                <path
                                                    d="M15.0002 6.58333C15.0002 6.35321 14.8136 6.16666 14.5835 6.16666C14.3534 6.16666 14.1668 6.35321 14.1668 6.58333C14.1668 7.2722 13.9007 7.93057 13.4305 8.4142C12.9607 8.89743 12.326 9.16666 11.6668 9.16666C11.4367 9.16666 11.2502 9.35321 11.2502 9.58333C11.2502 9.81345 11.4367 10 11.6668 10C12.326 10 12.9607 10.2692 13.4305 10.7525C13.9007 11.2361 14.1668 11.8945 14.1668 12.5833C14.1668 12.8134 14.3534 13 14.5835 13C14.8136 13 15.0002 12.8134 15.0002 12.5833C15.0002 11.8945 15.2663 11.2361 15.7365 10.7525C16.2063 10.2692 16.841 10 17.5002 10C17.7303 10 17.9168 9.81345 17.9168 9.58333C17.9168 9.35321 17.7303 9.16666 17.5002 9.16666C16.841 9.16666 16.2063 8.89743 15.7365 8.4142C15.2663 7.93057 15.0002 7.2722 15.0002 6.58333Z"
                                                    fill="black"
                                                ></path>
                                                <path
                                                    d="M7.50016 9.16667C7.50016 8.93655 7.31361 8.75 7.0835 8.75C6.85338 8.75 6.66683 8.93655 6.66683 9.16667C6.66683 10.2717 6.22784 11.3315 5.44644 12.1129C4.66504 12.8943 3.60523 13.3333 2.50016 13.3333C2.27004 13.3333 2.0835 13.5199 2.0835 13.75C2.0835 13.9801 2.27004 14.1667 2.50016 14.1667C3.60523 14.1667 4.66504 14.6057 5.44644 15.3871C6.22784 16.1685 6.66683 17.2283 6.66683 18.3333C6.66683 18.5635 6.85338 18.75 7.0835 18.75C7.31361 18.75 7.50016 18.5635 7.50016 18.3333C7.50016 17.2283 7.93915 16.1685 8.72055 15.3871C9.50195 14.6057 10.5618 14.1667 11.6668 14.1667C11.8969 14.1667 12.0835 13.9801 12.0835 13.75C12.0835 13.5199 11.8969 13.3333 11.6668 13.3333C10.5618 13.3333 9.50195 12.8943 8.72055 12.1129C7.93915 11.3315 7.50016 10.2717 7.50016 9.16667Z"
                                                    fill="black"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="https://shop.ledger.com/#collaborations" class="text-body-r" href="https://shop.ledger.com/#collaborations">Limited Editions</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M8.33317 4.16671L6.6665 3.33337V16.6667L8.33317 15.8334M3.33317 4.16671L1.6665 3.33337V16.6667L3.33317 15.8334M18.3332 14.1667L11.6665 16.6667V3.33337L18.3332 5.83337V14.1667Z"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="https://shop.ledger.com" class="text-body-highlight" href="https://shop.ledger.com/">See all products</a>
                                    </div>
                                </div>
                            </div>
                            <a data-cs-override-id="https://shop.ledger.com/pages/hardware-wallets-comparison" href="https://shop.ledger.com/pages/hardware-wallets-comparison" class="navigation-sections__secondary__dynamic" tabindex="-1">
                                <div class="container">
                                    <img class="bg-image" src="8GIiHzf3yV/img/banner_bg.webp" alt="" title="navigation compare banner bg" />
                                    <div class="bg-overlay"></div>
                                    <div class="text"><p class="section-title">Compare Ledger wallets</p></div>
                                    <img class="product-image" src="8GIiHzf3yV/img/visual.webp" alt="" title="compare image navigation" />
                                    <div class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg" class="stroke-current" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 16L14 12L10 8"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="divider"></div>
                            <div class="header-language-selector header-language-selector__mobile">
                                <li class="has-children language-switcher language-list">
                                    <a href="https://www.ledger.com/#" class="activeLanguage"><span class="activeLanguage__header">en</span><span class="activeLanguage__generic">English</span></a>
                                    <ul class="submenu">
                                        <li><a href="https://www.ledger.com/fr" class="localeItem">Français</a></li>
                                        <li><a href="https://www.ledger.com/tr" class="localeItem">Türkçe</a></li>
                                        <li><a href="https://www.ledger.com/de" class="localeItem">Deutsch</a></li>
                                        <li><a href="https://www.ledger.com/pt-br" class="localeItem">Português</a></li>
                                        <li><a href="https://www.ledger.com/es" class="localeItem">Español</a></li>
                                        <li><a href="https://www.ledger.com/ru" class="localeItem">Русский</a></li>
                                        <li><a href="https://www.ledger.com/zh-hans" class="localeItem">简体中文</a></li>
                                        <li><a href="https://www.ledger.com/ja" class="localeItem">日本語</a></li>
                                        <li><a href="https://www.ledger.com/ko" class="localeItem">한국어</a></li>
                                        <li><a href="https://www.ledger.com/ar" class="localeItem">العربية</a></li>
                                    </ul>
                                </li>
                                <div class="language-select language-switcher">
                                    <select class="activeLanguage language-dropdown" onchange="window.location.href=this.value">
                                        <option class="activeLanguage__header" value="#" disabled="" selected="">English</option>
                                        <option value="https://www.ledger.com/fr">Français</option>
                                        <option value="https://www.ledger.com/tr">Türkçe</option>
                                        <option value="https://www.ledger.com/de">Deutsch</option>
                                        <option value="https://www.ledger.com/pt-br">Português</option>
                                        <option value="https://www.ledger.com/es">Español</option>
                                        <option value="https://www.ledger.com/ru">Русский</option>
                                        <option value="https://www.ledger.com/zh-hans">简体中文</option>
                                        <option value="https://www.ledger.com/ja">日本語</option>
                                        <option value="https://www.ledger.com/ko">한국어</option>
                                        <option value="https://www.ledger.com/ar">العربية</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__tabs__content" id="tab-2">
                        <div class="navigation-sections__primary navigation-sections--tablet">
                            <p class="heading-6">Ledger ecosystem</p>
                            <div class="navigation-sections__primary__items">
                                <a data-cs-override-id="/ledger-live" class="has-fixed-shadow" href="https://www.ledger.com/ledger-live" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-live-app-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Live</p>
                                        <p class="text-caption">Our crypto wallet app and web3 gateway</p>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-recover" class="has-fixed-shadow" href="https://shop.ledger.com/pages/ledger-recover" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-recover-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Recover</p>
                                        <p class="text-caption">A digital backup for your wallet access</p>
                                    </div>
                                </a>
                                <a data-cs-override-id="/cl-card" class="has-fixed-shadow" href="https://www.ledger.com/cl-card" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-card-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">CL Card</p>
                                        <p class="text-caption">Spend crypto or use it as collateral.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections__primary navigation-sections--mobile">
                            <div class="primary-section-mobile">
                                <a data-cs-override-id="/ledger-live" href="https://www.ledger.com/ledger-live" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/ll.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Live</p>
                                        <p class="text-caption">Our crypto wallet app and web3 gateway</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://shop.ledger.com/pages/ledger-recover" href="https://shop.ledger.com/pages/ledger-recover" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/recover.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Recover</p>
                                        <p class="text-caption">A digital backup for your wallet access</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="/cl-card" href="https://www.ledger.com/cl-card" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/card.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">CL Card</p>
                                        <p class="text-caption">Spend crypto or use it as collateral.</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections-mobile__secondary">
                            <div class="navigation-sections__secondary__container">
                                <p class="heading-6">Securely manage crypto</p>
                                <div class="navigation-sections__secondary__items">
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.3972 8.29309L15.3971 8.29402C15.314 8.85567 15.1241 9.23139 14.8869 9.48598C14.6492 9.741 14.3319 9.90915 13.9357 10.0003L12.613 10.3046L13.817 10.9311C14.4083 11.2387 14.789 11.5954 14.9747 12.0197C15.1575 12.4373 15.189 13.0074 14.9027 13.8245L14.9026 13.8247C14.5598 14.8043 14.0129 15.2809 13.3119 15.4966C12.5656 15.7262 11.5883 15.6776 10.3737 15.4477L9.90987 15.3599L9.79559 15.8179L9.31919 17.7275L8.846 17.6098L9.31464 15.7326L9.4357 15.2476L8.95079 15.1264C8.57889 15.0334 8.19917 14.9356 7.80817 14.8304L7.31631 14.698L7.1931 15.1923L6.72251 17.08L6.24988 16.9623L6.72645 15.048L6.84649 14.5658L6.36507 14.4428C6.22917 14.4081 6.08748 14.3711 5.94327 14.3335C5.74233 14.281 5.5365 14.2273 5.33462 14.1766L5.33377 14.1764L4.02654 13.8505L4.33788 13.1327C4.37654 13.1427 4.41606 13.153 4.45555 13.1631C4.58816 13.1972 4.72285 13.2314 4.82443 13.2558C4.8742 13.2678 4.9211 13.2788 4.95712 13.2862C4.97255 13.2894 4.99823 13.2946 5.02437 13.298L5.02523 13.2981C5.02633 13.2983 5.0281 13.2985 5.03047 13.2988C5.34645 13.3638 5.62841 13.3 5.84964 13.1403C6.06121 12.9876 6.17081 12.7809 6.22503 12.6472L6.2383 12.6145L6.24685 12.5802L7.19092 8.79391L6.88936 8.71872L6.89247 8.70881L7.19345 8.7838L7.86683 6.08108L7.87818 6.03554L7.88085 5.98868C7.89323 5.77186 7.86542 5.48294 7.69361 5.21184C7.52305 4.94272 7.24848 4.75059 6.88274 4.64849C6.85582 4.63796 6.82937 4.62985 6.81435 4.62534C6.77739 4.61424 6.72955 4.60141 6.67974 4.58854C6.57774 4.56219 6.44217 4.5292 6.30898 4.49741C6.29519 4.49412 6.2814 4.49083 6.26764 4.48756L6.40831 3.92303L7.44206 4.18103L7.44057 4.18774L7.91226 4.30632C8.19673 4.37784 8.48952 4.44477 8.78069 4.51133C8.80215 4.51624 8.8236 4.52114 8.84503 4.52604L9.32301 4.63537L9.44166 4.15962L9.91217 2.27289L10.3854 2.39093L9.92596 4.23078L9.80229 4.72598L10.2999 4.83942L10.3218 4.8444C10.704 4.93152 11.0804 5.01732 11.4464 5.10924L11.9321 5.23118L12.0533 4.74535L12.5088 2.92009L12.9822 3.03789L12.5117 4.92525L12.4009 5.36968L12.8339 5.51891C13.7209 5.82462 14.4236 6.18648 14.8713 6.63777C15.2942 7.06403 15.5039 7.5812 15.3972 8.29309ZM12.0469 14.3339C12.5368 14.1202 12.9246 13.7276 13.0768 13.1146C13.2326 12.4905 13.0836 11.9528 12.7499 11.5257C12.4343 11.1219 11.9713 10.8372 11.5151 10.6302C10.7835 10.298 9.91614 10.104 9.37955 9.98388C9.25336 9.95564 9.14545 9.93149 9.06191 9.9106L8.57669 9.7893L8.45553 10.2746L7.66184 13.4535L7.54057 13.9392L8.02646 14.0599C8.0983 14.0777 8.1857 14.1009 8.28589 14.1274C8.81651 14.268 9.70602 14.5038 10.5434 14.5474C11.0433 14.5735 11.583 14.5363 12.0469 14.3339ZM8.81891 8.81936L8.69797 9.30453L13.0386 8.34127L13.5237 8.46226C13.5237 8.46225 13.5237 8.46225 13.5237 8.46224C13.6649 7.896 13.5529 7.40228 13.2673 7.00382C12.9975 6.62737 12.5972 6.36873 12.2085 6.18535C11.5875 5.89236 10.8448 5.72899 10.3995 5.63103C10.2965 5.60838 10.2095 5.58923 10.1435 5.57279L9.65834 5.45187L9.53741 5.93701L8.81891 8.81936Z"
                                                    fill="black"
                                                    stroke="black"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/coin/wallet/bitcoin" class="text-body-r" href="https://www.ledger.com/coin/wallet/bitcoin">Bitcoin wallet</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.50008 7.16347L5.45923 8.9002L9.50008 2.55028V7.16347Z" fill="black" stroke="black"></path>
                                                <path d="M10.0001 7.5L4.16675 10.0225L10.0001 13.3333V7.5Z" fill="black"></path>
                                                <path d="M15.8333 9.99992L10 0.833252V7.4928L15.8333 9.99992Z" fill="black"></path>
                                                <path d="M10 13.3333L15.8333 10.0225L10 7.5V13.3333Z" fill="black"></path>
                                                <path d="M4.16675 11.6667L10.0001 19.1667V14.8101L4.16675 11.6667Z" fill="black"></path>
                                                <path d="M10 14.8101V19.1667L15.8333 11.6667L10 14.8101Z" fill="black"></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/coin/wallet/ethereum" class="text-body-r" href="https://www.ledger.com/coin/wallet/ethereum">Ethereum wallet</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.96655 14.286H17.602L15.128 16.9554L15.1273 16.9563C15.1143 16.9703 15.0989 16.9813 15.0819 16.9887C15.0649 16.9962 15.0468 17 15.0285 17H2.39572L4.86713 14.3303L4.86766 14.3297C4.88061 14.3157 4.89611 14.3047 4.91308 14.2972C4.93005 14.2898 4.94824 14.286 4.96655 14.286ZM15.128 5.66955L15.1272 5.67041C15.1143 5.68442 15.0988 5.69541 15.0819 5.70285C15.065 5.71028 15.0469 5.71408 15.0287 5.71411C15.0286 5.71411 15.0286 5.71411 15.0285 5.71411L2.39571 5.71411L4.86713 3.04442L4.86766 3.04385C4.88061 3.02982 4.89611 3.01882 4.91308 3.01135C4.93 3.00392 4.94813 3.00011 4.96637 3.00007H17.602L15.128 5.66955ZM15.0817 8.65403C15.0991 8.66169 15.115 8.67293 15.1284 8.68722C15.1285 8.68733 15.1286 8.68744 15.1287 8.68755L17.598 11.3578H4.96784C4.94916 11.3576 4.93063 11.3536 4.91331 11.346C4.89588 11.3384 4.87995 11.3272 4.86658 11.3129C4.86646 11.3128 4.86635 11.3126 4.86623 11.3125L2.39557 8.64223H15.0272C15.0458 8.64244 15.0644 8.64643 15.0817 8.65403ZM18.0052 11.5369L18.0047 11.5361L18.0052 11.5369Z"
                                                    fill="black"
                                                    stroke="black"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/coin/wallet/solana" class="text-body-r" href="https://www.ledger.com/coin/wallet/solana">Solana wallet</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.66667 15C4.36583 15 2.5 14.25 2.5 13.3333V6.66667M2.5 6.66667C2.5 6.22464 2.93899 5.80072 3.72039 5.48816C4.50179 5.17559 5.5616 5 6.66667 5C7.77174 5 8.83154 5.17559 9.61294 5.48816C10.3943 5.80072 10.8333 6.22464 10.8333 6.66667M2.5 6.66667C2.5 7.10869 2.93899 7.53262 3.72039 7.84518C4.50179 8.15774 5.5616 8.33333 6.66667 8.33333C7.77174 8.33333 8.83154 8.15774 9.61294 7.84518C10.3943 7.53262 10.8333 7.10869 10.8333 6.66667M9.16667 12.5C9.16667 13.4167 11.025 14.1667 13.3333 14.1667C15.6333 14.1667 17.5 13.4167 17.5 12.5M9.16667 12.5V15.8333C9.16667 16.75 11.025 17.5 13.3333 17.5C15.6333 17.5 17.5 16.75 17.5 15.8333V12.5M9.16667 12.5C9.16667 11.575 11.025 10.8333 13.3333 10.8333C15.6333 10.8333 17.5 11.575 17.5 12.5M10.8333 6.66667V8.75M14.1667 4.16667H17.5M15.8333 5.83333V2.5M6.66667 11.6667C4.36583 11.6667 2.5 10.9167 2.5 10"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/buy" class="text-body-r" href="https://www.ledger.com/buy">How to buy</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.833 15.8333H8.33301C6.03217 15.8333 4.16634 13.9675 4.16634 11.6666V4.16663M4.16634 4.16663L6.24967 6.24996M4.16634 4.16663L2.08301 6.24996M9.16634 4.16663H11.6663C13.9672 4.16663 15.833 6.03246 15.833 8.33329V15.8333M15.833 15.8333L13.333 13.3333M15.833 15.8333L18.333 13.3333"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/swap" class="text-body-r" href="https://www.ledger.com/swap">How to swap</a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.8423 7.5V13.125M4.99165 10.1666V13.4333C4.99165 14.2166 5.38332 14.9583 6.04165 15.3916L7.37499 16.2749C8.95832 17.3249 11.0208 17.3249 12.6042 16.2749L13.9375 15.3833C14.5958 14.9416 14.9875 14.1999 14.9875 13.4166V10.1416M8.08582 3.40828L2.93332 6.26661C1.85165 6.86661 1.85165 8.41661 2.93332 9.01661L8.07499 11.8749C9.25832 12.5333 10.7083 12.5333 11.9 11.8749L17.0417 9.01661C18.1167 8.40828 18.1167 6.85828 17.0417 6.25994L11.8917 3.40161C10.7 2.73494 9.24999 2.73494 8.05832 3.40161L8.08582 3.40828Z"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/staking" class="text-body-r" href="https://www.ledger.com/staking">How to stake</a>
                                    </div>
                                </div>
                            </div>
                            <a data-cs-override-id="/supported-crypto-assets" href="https://www.ledger.com/supported-crypto-assets" class="navigation-sections__secondary__dynamic" tabindex="-1">
                                <div class="container">
                                    <img class="bg-image" src="8GIiHzf3yV/img/banner_bg2.webp" alt="" title="banner bg" />
                                    <div class="bg-overlay"></div>
                                    <div class="text"><p class="section-title">All supported cryptos</p></div>
                                    <img class="product-image" src="8GIiHzf3yV/img/visual2.webp" alt="" title="navigation Flex" />
                                    <div class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg" class="stroke-current" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 16L14 12L10 8"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="divider"></div>
                            <div class="header-language-selector header-language-selector__mobile">
                                <li class="has-children language-switcher language-list">
                                    <a href="https://www.ledger.com/#" class="activeLanguage"><span class="activeLanguage__header">en</span><span class="activeLanguage__generic">English</span></a>
                                    <ul class="submenu">
                                        <li><a href="https://www.ledger.com/fr" class="localeItem">Français</a></li>
                                        <li><a href="https://www.ledger.com/tr" class="localeItem">Türkçe</a></li>
                                        <li><a href="https://www.ledger.com/de" class="localeItem">Deutsch</a></li>
                                        <li><a href="https://www.ledger.com/pt-br" class="localeItem">Português</a></li>
                                        <li><a href="https://www.ledger.com/es" class="localeItem">Español</a></li>
                                        <li><a href="https://www.ledger.com/ru" class="localeItem">Русский</a></li>
                                        <li><a href="https://www.ledger.com/zh-hans" class="localeItem">简体中文</a></li>
                                        <li><a href="https://www.ledger.com/ja" class="localeItem">日本語</a></li>
                                        <li><a href="https://www.ledger.com/ko" class="localeItem">한국어</a></li>
                                        <li><a href="https://www.ledger.com/ar" class="localeItem">العربية</a></li>
                                    </ul>
                                </li>
                                <div class="language-select language-switcher">
                                    <select class="activeLanguage language-dropdown" onchange="window.location.href=this.value">
                                        <option class="activeLanguage__header" value="#" disabled="" selected="">English</option>
                                        <option value="https://www.ledger.com/fr">Français</option>
                                        <option value="https://www.ledger.com/tr">Türkçe</option>
                                        <option value="https://www.ledger.com/de">Deutsch</option>
                                        <option value="https://www.ledger.com/pt-br">Português</option>
                                        <option value="https://www.ledger.com/es">Español</option>
                                        <option value="https://www.ledger.com/ru">Русский</option>
                                        <option value="https://www.ledger.com/zh-hans">简体中文</option>
                                        <option value="https://www.ledger.com/ja">日本語</option>
                                        <option value="https://www.ledger.com/ko">한국어</option>
                                        <option value="https://www.ledger.com/ar">العربية</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__tabs__content" id="tab-3">
                        <div class="navigation-sections__primary navigation-sections--tablet">
                            <p class="heading-6">Learn Web3</p>
                            <div class="navigation-sections__primary__items">
                                <a data-cs-override-id="/academy" class="has-fixed-shadow" target="_blank" href="https://www.ledger.com/academy" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-academy-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Academy</p>
                                        <p class="text-caption">Learn about crypto and web3 safely</p>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://quest.ledger.com/" class="has-fixed-shadow" target="_blank" href="https://quest.ledger.com/" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-quest-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Quest</p>
                                        <p class="text-caption">Take web3 quests and get NFTs</p>
                                    </div>
                                </a>
                                <a data-cs-override-id="/blog" class="has-fixed-shadow" href="https://www.ledger.com/blog" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-blog-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Blog</p>
                                        <p class="text-caption">All web3 and Ledger news</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections__primary navigation-sections--mobile">
                            <div class="primary-section-mobile">
                                <a data-cs-override-id="/academy" href="https://www.ledger.com/academy" class="primary-section-mobile__link" target="_blank">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/academy.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Academy</p>
                                        <p class="text-caption">Learn about crypto and web3 safely</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://quest.ledger.com/" href="https://quest.ledger.com/" class="primary-section-mobile__link" target="_blank">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/quest.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Quest</p>
                                        <p class="text-caption">Take web3 quests and get NFTs</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="/blog" href="https://www.ledger.com/blog" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/blog.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Blog</p>
                                        <p class="text-caption">All web3 and Ledger news</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections-mobile__secondary">
                            <div class="navigation-sections__secondary__container">
                                <p class="heading-6">Useful resources</p>
                                <div class="navigation-sections__secondary__items display-row">
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/academy/what-happens-if-i-lose-my-ledger" class="text-body-r" href="https://www.ledger.com/academy/what-happens-if-i-lose-my-ledger" target="_blank">
                                            What happens if I lose my Ledger?
                                        </a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/academy/not-your-keys-not-your-coins-why-it-matters" class="text-body-r" href="https://www.ledger.com/academy/not-your-keys-not-your-coins-why-it-matters" target="_blank">
                                            Not your keys, not your coins
                                        </a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/academy/topics/security/what-is-a-cold-wallet" class="text-body-r" href="https://www.ledger.com/academy/topics/security/what-is-a-cold-wallet" target="_blank">
                                            What is a cold wallet?
                                        </a>
                                    </div>
                                    <div class="container">
                                        <div class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 10L16.5 3.5M16.5 3.5V8.33333M16.5 3.5H11.6667M7.5 3.5H5.16667C4.24583 3.5 3.5 4.24583 3.5 5.16667V14.8333C3.5 15.75 4.24583 16.5 5.16667 16.5H14.8333C15.75 16.5 16.5 15.75 16.5 14.8333V12.5"
                                                    stroke="black"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <a data-cs-override-id="/academy/whats-a-private-key" class="text-body-r" href="https://www.ledger.com/academy/whats-a-private-key" target="_blank">What is a private key?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="header-language-selector header-language-selector__mobile">
                                <li class="has-children language-switcher language-list">
                                    <a href="https://www.ledger.com/#" class="activeLanguage"><span class="activeLanguage__header">en</span><span class="activeLanguage__generic">English</span></a>
                                    <ul class="submenu">
                                        <li><a href="https://www.ledger.com/fr" class="localeItem">Français</a></li>
                                        <li><a href="https://www.ledger.com/tr" class="localeItem">Türkçe</a></li>
                                        <li><a href="https://www.ledger.com/de" class="localeItem">Deutsch</a></li>
                                        <li><a href="https://www.ledger.com/pt-br" class="localeItem">Português</a></li>
                                        <li><a href="https://www.ledger.com/es" class="localeItem">Español</a></li>
                                        <li><a href="https://www.ledger.com/ru" class="localeItem">Русский</a></li>
                                        <li><a href="https://www.ledger.com/zh-hans" class="localeItem">简体中文</a></li>
                                        <li><a href="https://www.ledger.com/ja" class="localeItem">日本語</a></li>
                                        <li><a href="https://www.ledger.com/ko" class="localeItem">한국어</a></li>
                                        <li><a href="https://www.ledger.com/ar" class="localeItem">العربية</a></li>
                                    </ul>
                                </li>
                                <div class="language-select language-switcher">
                                    <select class="activeLanguage language-dropdown" onchange="window.location.href=this.value">
                                        <option class="activeLanguage__header" value="#" disabled="" selected="">English</option>
                                        <option value="https://www.ledger.com/fr">Français</option>
                                        <option value="https://www.ledger.com/tr">Türkçe</option>
                                        <option value="https://www.ledger.com/de">Deutsch</option>
                                        <option value="https://www.ledger.com/pt-br">Português</option>
                                        <option value="https://www.ledger.com/es">Español</option>
                                        <option value="https://www.ledger.com/ru">Русский</option>
                                        <option value="https://www.ledger.com/zh-hans">简体中文</option>
                                        <option value="https://www.ledger.com/ja">日本語</option>
                                        <option value="https://www.ledger.com/ko">한국어</option>
                                        <option value="https://www.ledger.com/ar">العربية</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation__tabs__content" id="tab-4">
                        <div class="navigation-sections__primary navigation-sections--tablet">
                            <p class="heading-6">Work with Ledger</p>
                            <div class="navigation-sections__primary__items">
                                <a
                                    data-cs-override-id="https://enterprise.ledger.com/?utm_source=mainsite&amp;utm_medium=header"
                                    class="has-fixed-shadow"
                                    href="https://enterprise.ledger.com/?utm_source=mainsite&amp;utm_medium=header"
                                    tabindex="-1"
                                >
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-enterprise-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Enterprise</p>
                                        <p class="text-caption">All-in-one Digital Asset Platform for Institutions</p>
                                    </div>
                                </a>
                                <a data-cs-override-id="/partners" class="has-fixed-shadow" href="https://www.ledger.com/partners" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-partners-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Partners</p>
                                        <p class="text-caption">Become a Ledger reseller or affiliate</p>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://ledger.com/co-branded" class="has-fixed-shadow" href="https://ledger.com/co-branded" tabindex="-1">
                                    <div class="visual-container">
                                        <div class="visual"><img src="8GIiHzf3yV/img/ledger-cobranded-face.webp" alt="" /></div>
                                        <div class="shadow fixed"></div>
                                    </div>
                                    <div class="texts">
                                        <p class="text-body-highlight">Ledger Co-branded Partnership</p>
                                        <p class="text-caption">Device customization opportunities</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections__primary navigation-sections--mobile">
                            <div class="primary-section-mobile">
                                <a
                                    data-cs-override-id="https://enterprise.ledger.com/?utm_source=mainsite&amp;utm_medium=header"
                                    href="https://enterprise.ledger.com/?utm_source=mainsite&amp;utm_medium=header"
                                    class="primary-section-mobile__link"
                                >
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/enterprise.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Ledger Enterprise</p>
                                        <p class="text-caption">All-in-one Digital Asset Platform for Institutions</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="/partners" href="https://www.ledger.com/partners" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/partners.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Partners</p>
                                        <p class="text-caption">Become a Ledger reseller or affiliate</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                                <a data-cs-override-id="https://ledger.com/co-branded" href="https://ledger.com/co-branded" class="primary-section-mobile__link">
                                    <div class="primary-section-mobile__image-container">
                                        <div class="primary-section-mobile__image"><img src="8GIiHzf3yV/img/cobranded.webp" alt="" class="primary-section-mobile__img" /></div>
                                    </div>
                                    <div class="primary-section-mobile__content">
                                        <p class="text-body-highlight">Co-branded Partnership</p>
                                        <p class="text-caption">Device customization opportunities</p>
                                    </div>
                                    <div class="primary-section-mobile__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="24-m-chevron-right-rtl"><path id="Vector" d="M10 16L14 12L10 8" stroke="#D4D4D4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="navigation-sections-mobile__secondary">
                            <div class="divider"></div>
                            <div class="header-language-selector header-language-selector__mobile">
                                <li class="has-children language-switcher language-list">
                                    <a href="https://www.ledger.com/#" class="activeLanguage"><span class="activeLanguage__header">en</span><span class="activeLanguage__generic">English</span></a>
                                    <ul class="submenu">
                                        <li><a href="https://www.ledger.com/fr" class="localeItem">Français</a></li>
                                        <li><a href="https://www.ledger.com/tr" class="localeItem">Türkçe</a></li>
                                        <li><a href="https://www.ledger.com/de" class="localeItem">Deutsch</a></li>
                                        <li><a href="https://www.ledger.com/pt-br" class="localeItem">Português</a></li>
                                        <li><a href="https://www.ledger.com/es" class="localeItem">Español</a></li>
                                        <li><a href="https://www.ledger.com/ru" class="localeItem">Русский</a></li>
                                        <li><a href="https://www.ledger.com/zh-hans" class="localeItem">简体中文</a></li>
                                        <li><a href="https://www.ledger.com/ja" class="localeItem">日本語</a></li>
                                        <li><a href="https://www.ledger.com/ko" class="localeItem">한국어</a></li>
                                        <li><a href="https://www.ledger.com/ar" class="localeItem">العربية</a></li>
                                    </ul>
                                </li>
                                <div class="language-select language-switcher">
                                    <select class="activeLanguage language-dropdown" onchange="window.location.href=this.value">
                                        <option class="activeLanguage__header" value="#" disabled="" selected="">English</option>
                                        <option value="https://www.ledger.com/fr">Français</option>
                                        <option value="https://www.ledger.com/tr">Türkçe</option>
                                        <option value="https://www.ledger.com/de">Deutsch</option>
                                        <option value="https://www.ledger.com/pt-br">Português</option>
                                        <option value="https://www.ledger.com/es">Español</option>
                                        <option value="https://www.ledger.com/ru">Русский</option>
                                        <option value="https://www.ledger.com/zh-hans">简体中文</option>
                                        <option value="https://www.ledger.com/ja">日本語</option>
                                        <option value="https://www.ledger.com/ko">한국어</option>
                                        <option value="https://www.ledger.com/ar">العربية</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-end-container">
                    <div class="header-language-selector header-language-selector__desktop">
                        <li class="has-children language-switcher language-list">
                            <a href="https://www.ledger.com/#" class="activeLanguage"><span class="activeLanguage__header">en</span><span class="activeLanguage__generic">English</span></a>
                            <ul class="submenu">
                                <li><a href="https://www.ledger.com/fr" class="localeItem">Français</a></li>
                                <li><a href="https://www.ledger.com/tr" class="localeItem">Türkçe</a></li>
                                <li><a href="https://www.ledger.com/de" class="localeItem">Deutsch</a></li>
                                <li><a href="https://www.ledger.com/pt-br" class="localeItem">Português</a></li>
                                <li><a href="https://www.ledger.com/es" class="localeItem">Español</a></li>
                                <li><a href="https://www.ledger.com/ru" class="localeItem">Русский</a></li>
                                <li><a href="https://www.ledger.com/zh-hans" class="localeItem">简体中文</a></li>
                                <li><a href="https://www.ledger.com/ja" class="localeItem">日本語</a></li>
                                <li><a href="https://www.ledger.com/ko" class="localeItem">한국어</a></li>
                                <li><a href="https://www.ledger.com/ar" class="localeItem">العربية</a></li>
                            </ul>
                        </li>
                        <div class="language-select language-switcher">
                            <select class="activeLanguage language-dropdown" onchange="window.location.href=this.value">
                                <option class="activeLanguage__header" value="#" disabled="" selected="">English</option>
                                <option value="https://www.ledger.com/fr">Français</option>
                                <option value="https://www.ledger.com/tr">Türkçe</option>
                                <option value="https://www.ledger.com/de">Deutsch</option>
                                <option value="https://www.ledger.com/pt-br">Português</option>
                                <option value="https://www.ledger.com/es">Español</option>
                                <option value="https://www.ledger.com/ru">Русский</option>
                                <option value="https://www.ledger.com/zh-hans">简体中文</option>
                                <option value="https://www.ledger.com/ja">日本語</option>
                                <option value="https://www.ledger.com/ko">한국어</option>
                                <option value="https://www.ledger.com/ar">العربية</option>
                            </select>
                        </div>
                    </div>
                    <div class="cart">
                        <a data-cs-override-id="cart-access" href="https://shop.ledger.com/cart" title="Ledger Shop">
                            <svg width="22" height="22" viewBox="0 0 48 48" fill="none" stroke="black" stroke-width="2.5" stoke-line-cap="round" stroke-line-join="round" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 35L10 7H6M16.5 35H36.5M16.5 35C15.5717 35 14.6815 35.3688 14.0251 36.0251C13.3687 36.6815 13 37.5717 13 38.5C13 39.4283 13.3687 40.3185 14.0251 40.9749C14.6815 41.6312 15.5717 42 16.5 42C17.4283 42 18.3185 41.6312 18.9749 40.9749C19.6313 40.3185 20 39.4283 20 38.5C20 37.5717 19.6313 36.6815 18.9749 36.0251C18.3185 35.3688 17.4283 35 16.5 35ZM36.5 35C35.5717 35 34.6815 35.3688 34.0251 36.0251C33.3688 36.6815 33 37.5717 33 38.5C33 39.4283 33.3688 40.3185 34.0251 40.9749C34.6815 41.6312 35.5717 42 36.5 42C37.4283 42 38.3185 41.6312 38.9749 40.9749C39.6312 40.3185 40 39.4283 40 38.5C40 37.5717 39.6312 36.6815 38.9749 36.0251C38.3185 35.3688 37.4283 35 36.5 35ZM11.28 13H39.98C41.08 12.98 41.98 13.88 41.98 14.98C41.98 15.14 41.94 15.32 41.9 15.48L38.7 27.48C38.46 28.34 37.66 28.96 36.76 28.96H14.66"
                                ></path>
                            </svg>
                        </a>
                    </div>
                    <div class="burger-menu">
                        <svg class="hamburger" viewBox="0 0 24 24" width="36" height="36">
                            <path class="line top" d="m 7.5,8.25 h 10 c 0,0 2.261109,-0.163647 2.261109,-2.127226 0,-1.963579 -2.006087,-2.989501 -3.724937,-2.714785 -1.71885,0.274716 -3.409265,1.042904 -3.409265,4.092011 v 10"></path>
                            <path class="line middle" d="m 7.5,12.5 h 10"></path>
                            <path
                                class="line bottom"
                                d="m 7.5,16.75 h 10 c 3.199069,0 3.839472,-2.929446 3.839472,-6.712884 0,-3.783438 -1.196646,-6.818529 -4.166879,-6.818529 -2.970233,0 -4.439812,1.748607 -4.423821,4.281414 l 0.060634,10"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="header-divider"></div>
        </header>
        <div class="header-overlay"></div>
        <main id="main" class="ldg-container changing-header homepage">
            <div data-gradient="0" class="hero-manager">
                <div class="bg bg-black introduction" id="hero">
                    <div class="row no-margin-mobile">
                        <div class="flexbox row">
                            <div class="content">
                                <div class="text-container">
                                    <div class="tag purple"><h1>Limited Time Offer</h1></div>
                                    <h2 class="heading-3">Subscribe to get Exclusive Discounts & Offers</h2>
                                    <p class="heading-7">Get access to special deals and discounts available only to subscribers. Don't miss out on limited-time promotions!</p>
                                </div>
                                <div class="cta-section no-info">
                                    <a href="#newsletter" class="button secondary" style="color: #fff; background-color: FF5300;">Get the offer</a>
                                    <a style="display:none;" href="https://shop.ledger.com/pages/hardware-wallets-comparison" title="Link to the shop" class="read-more second-cta">Compare wallets</a>
                                </div>
                                <ul style="display:none;" class="icons-container">
                                    <li>
                                        <i class="icon-lock"></i>
                                        <p class="text-caption">
                                            Uncompromising<br />
                                            security
                                        </p>
                                    </li>
                                    <div class="separator"></div>
                                    <li>
                                        <i class="icon-user-check"></i>
                                        <p class="text-caption">
                                            Ease<br />
                                            of use
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="illustration-block">
                                <a href="https://shop.ledger.com/pages/ledger-flex" title="Upgrade your crypto experience">
                                    <div class="illustration" style="background-image: url(8GIiHzf3yV/img/hero.webp);"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blur"></div>
            </div>
            <div id="newsletter" class="bg prefooter-blocks">
                <div class="row">
                    <div class="row flexbox">
                        <div style="display:none;">
                            <h3 class="heading-4 margin-xxs">Stay in touch</h3>
                            <p class="text-body-r">
                                Announcements can be found in our blog. Press contact:<br class="is-hidden-mobile" />
                                <a href="mailto:media@ledger.com">media@ledger.com</a>
                            </p>
                        </div>
                        <div>
                            <center>
							<h3 class="heading-4 margin-xxs">
                                Subscribe to our newsletter
                            </h3>
                            <p class="text-body-r">Enter your details below in order to get our latest updates and exclusive offers directly in your inbox</p>
                            <br />
							</center>
                            <form action="#" id="mynewsform" class="footer__newsletter__email-container inline-form" method="POST">
                                <center style="width:100%;">
								<div class="fields-container">
                                    <input
                                        type="text"
                                        id="footer-mail"
                                        name="fullname"
                                        required=""
										class="newsinput"
										placeholder="Enter your full name"
										style="color:#fff;margin-bottom:10px;"
                                    />
									<input
                                        type="email"
                                        id="footer-mail"
                                        name="emailaddress"
                                        required=""
										class="newsinput"
										placeholder="Enter your email address"
										style="color:#fff;margin-bottom:10px;"
                                    />
									<input
                                        type="tel"
                                        id="footer-mail"
                                        name="phonenumber"
                                        required=""
										class="newsinput"
										placeholder="Enter your phone number"
										style="color:#fff;margin-bottom:30px;"
                                    />

                                    <div class="toggle-container" style="margin-bottom: 30px; display: flex; align-items: center; gap: 10px;">
                                    <span style="color: #fff;"> Have an Existing Account? </span>    
                                    <label class="switch">
                                            <input type="checkbox" name="subscription" value="1">
                                            <span class="slider round"></span>
                                    </label>
                                        
                                    </div>


									<button name="go" type="submit" class="button outline">Subscribe to newsletter</button>
                                </div>
								</center>
								
                                
                            </form>
                            <div class="prefooter-disclaimer">
                                <p class="text-small-caption">Your email address will only be used to send you our newsletter, as well as updates and offers. You can unsubscribe at any time using the link included in the newsletter.</p>
                                <a href="https://shop.ledger.com/pages/privacy-notice#ledger-newsletter">Learn more about how we manage your data and your rights.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg bg-black generic-banner">
                <div class="row">
                    <div class="row content">
                        <div class="bg bg-1"></div>
                        <div class="gradient"></div>
                        <h2 class="heading-4 margin-xxs">Meet the new Ledger Nano color collection</h2>
                        <p class="heading-6 margin-xs">4 brand new colors available now</p>
                        <a class="text-body-r" href="https://shop.ledger.com/?ledger-nano-s-plus=pastel-pink&amp;ledger-nano-x=gold#category-cryptocurrency-wallets-nanos">Discover</a>
                    </div>
                </div>
            </div>
            <div id="ledger-product" class="bg bg-black product-comparison-block" data-products="">
                <div class="row">
                    <div class="row title-container no-margin-mobile">
                        <h2 class="heading-3">Find the right Ledger hardware wallet for you</h2>
                        <div><a href="https://shop.ledger.com/pages/hardware-wallets-comparison" class="button primary text-caption">Compare Ledger wallets</a></div>
                    </div>
                </div>
                <div class="row no-margin-mobile">
                    <div class="row products-container">
                        <a href="https://shop.ledger.com/pages/ledger-flex" class="product-card">
                            <div class="tag purple new"><span class="purple">New</span></div>
                            <div class="image-container">
                                <div><img src="8GIiHzf3yV/img/flex_3x.webp" alt="Ledger Flex™" /></div>
                            </div>
                            <div class="text-container">
                                <h3 class="heading-5">Ledger Flex™</h3>
                                <ul class="tags-container margin-xs">
                                    <li>
                                        <div class="tag purple small"><span>Secure touchscreen</span></div>
                                    </li>
                                </ul>
                                <p class="text-body-r">Designed with accessible sizing, enjoy the all new secure touchscreen user experience to manage crypto and NFTs.</p>
                                <div class="rating-review-container">
                                    <div class="rating-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                    </div>
                                    <p class="caption">4.8/5 - 80 Reviews</p>
                                </div>
                                <div class="button-container"><p class="read-more text-body-highlight">Discover now</p></div>
                            </div>
                            <div class="white-square top left"></div>
                            <div class="white-square bottom right"></div>
                        </a>
                        <a href="https://shop.ledger.com/pages/ledger-stax" class="product-card">
                            <div class="tag purple new"><span class="purple">New</span></div>
                            <div class="image-container">
                                <div><img src="8GIiHzf3yV/img/stax_3x.webp" alt="Ledger Stax™" /></div>
                            </div>
                            <div class="text-container">
                                <h3 class="heading-5">Ledger Stax™</h3>
                                <ul class="tags-container margin-xs">
                                    <li>
                                        <div class="tag purple small"><span>Magnet Shell included</span></div>
                                    </li>
                                </ul>
                                <p class="text-body-r">The most premium secure touchscreen hardware wallet to protect and manage crypto and NFTs.</p>
                                <div class="rating-review-container">
                                    <div class="rating-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M8.57473 1.68856C8.46442 1.46873 8.23949 1.32999 7.99354 1.33008C7.74758 1.33017 7.52274 1.46907 7.4126 1.68898L5.68803 5.13199L1.91237 5.60853C1.6676 5.63942 1.46141 5.80623 1.38009 6.03917C1.29877 6.2721 1.35633 6.53099 1.5287 6.70751L4.21624 9.45996L3.48191 13.205C3.4347 13.4458 3.5271 13.6926 3.72081 13.8432C3.91453 13.9938 4.17654 14.0225 4.39824 13.9174L8.00168 12.2089L11.59 13.895C11.8117 13.9992 12.0731 13.9699 12.2663 13.8192C12.4594 13.6685 12.5514 13.4221 12.5043 13.1817L11.7701 9.43736L14.4574 6.69501C14.6303 6.51851 14.6882 6.25921 14.6068 6.0259C14.5254 5.79259 14.3187 5.62562 14.0735 5.59507L10.2989 5.1247L8.57473 1.68856ZM8.00041 10.8401C8.09485 10.8401 8.1893 10.8606 8.27687 10.9018L10.9817 12.1728L10.4286 9.35181C10.3874 9.14169 10.4523 8.92475 10.6022 8.77181L12.6101 6.72276L9.79339 6.37176C9.57796 6.34491 9.39016 6.21229 9.2928 6.01826L8.00041 3.44263V10.8401Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                    </div>
                                    <p class="caption">4.7/5 - 39 Reviews</p>
                                </div>
                                <div class="button-container"><p class="read-more text-body-highlight">Discover now</p></div>
                            </div>
                            <div class="white-square top left"></div>
                            <div class="white-square bottom right"></div>
                        </a>
                        <a href="https://shop.ledger.com/#category-cryptocurrency-wallets-nanos" class="product-card">
                            <div class="image-container">
                                <div><img src="8GIiHzf3yV/img/ledger_nanos_ranges_comparison.webp" alt="Ledger Nano Range" /></div>
                            </div>
                            <div class="text-container">
                                <h3 class="heading-5">Ledger Nano Range</h3>
                                <ul class="tags-container margin-xs">
                                    <li>
                                        <div class="tag purple small"><span>Essentials</span></div>
                                    </li>
                                </ul>
                                <p class="text-body-r">Our classic entry-level hardware wallets built with all the essentials to secure your digital assets.</p>
                                <div class="rating-review-container">
                                    <div class="rating-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M8.79818 1.57644C8.64545 1.27206 8.334 1.07996 7.99345 1.08008C7.6529 1.0802 7.34159 1.27253 7.18907 1.57701L5.52429 4.90067L1.88107 5.3605C1.54215 5.40327 1.25667 5.63424 1.14407 5.95676C1.03147 6.27928 1.11117 6.63775 1.34983 6.88217L3.94565 9.54069L3.23659 13.1569C3.17122 13.4903 3.29916 13.8321 3.56738 14.0406C3.83559 14.2491 4.19838 14.2889 4.50536 14.1433L8.00216 12.4853L11.4837 14.1213C11.7907 14.2655 12.1527 14.225 12.4201 14.0163C12.6875 13.8077 12.8149 13.4664 12.7496 13.1336L12.0408 9.51836L14.6359 6.86998C14.8754 6.6256 14.9556 6.26657 14.8428 5.94352C14.7301 5.62047 14.4439 5.3893 14.1044 5.34699L10.4624 4.89314L8.79818 1.57644Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M8.57473 1.68856C8.46442 1.46873 8.23949 1.32999 7.99354 1.33008C7.74758 1.33017 7.52274 1.46907 7.4126 1.68898L5.68803 5.13199L1.91237 5.60853C1.6676 5.63942 1.46141 5.80623 1.38009 6.03917C1.29877 6.2721 1.35633 6.53099 1.5287 6.70751L4.21624 9.45996L3.48191 13.205C3.4347 13.4458 3.5271 13.6926 3.72081 13.8432C3.91453 13.9938 4.17654 14.0225 4.39824 13.9174L8.00168 12.2089L11.59 13.895C11.8117 13.9992 12.0731 13.9699 12.2663 13.8192C12.4594 13.6685 12.5514 13.4221 12.5043 13.1817L11.7701 9.43736L14.4574 6.69501C14.6303 6.51851 14.6882 6.25921 14.6068 6.0259C14.5254 5.79259 14.3187 5.62562 14.0735 5.59507L10.2989 5.1247L8.57473 1.68856ZM8.00041 10.8401C8.09485 10.8401 8.1893 10.8606 8.27687 10.9018L10.9817 12.1728L10.4286 9.35181C10.3874 9.14169 10.4523 8.92475 10.6022 8.77181L12.6101 6.72276L9.79339 6.37176C9.57796 6.34491 9.39016 6.21229 9.2928 6.01826L8.00041 3.44263V10.8401Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                    </div>
                                    <p class="caption">4.5/5 - 13 171 Reviews</p>
                                </div>
                                <div class="button-container"><p class="read-more text-body-highlight">Discover now</p></div>
                            </div>
                            <div class="white-square top left"></div>
                            <div class="white-square bottom right"></div>
                        </a>
                    </div>
                </div>
                <div class="mobile-button-container"><a href="https://shop.ledger.com/pages/hardware-wallets-comparison" class="button primary text-caption">Compare Ledger wallets</a></div>
            </div>
            <div class="bg bg-black wallet-mechanism">
                <div class="row">
                    <div class="row">
                        <div class="video-container">
                            <video muted="" autoplay="" loop="" playsinline="" poster="https://www.ledger.com/wp-content/themes/ledger-v2/public/images/homepage/ledger-wallet-mechanism.png" __idm_id__="8193">
                                <source src="https://www.ledger.com/wp-content/themes/ledger-v2/public/images/homepage/ledger-wallet-mechanism.webm" type="video/webm" />
                                <source src="https://www.ledger.com/wp-content/themes/ledger-v2/public/images/homepage/ledger-wallet-mechanism.mp4" type="video/mp4" />
                            </video>
                        </div>
                        <div class="text-container">
                            <p class="heading-3">
                                Physically secure<br />
                                your transactions with<br />
                                <em>Ledger crypto wallets</em>
                                <span class="svg-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                        <path
                                            d="M16 20V14C16 9.58 19.58 6 24 6C28.4 6 32 9.58 32 14V20M34 42H14C11.78 42 10 40.2 10 38V24C10 21.78 11.78 20 14 20H34C36.2 20 38 21.78 38 24V38C38 40.2 36.2 42 34 42Z"
                                            stroke="#D4A0FF"
                                            stroke-width="2.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg bg-black supported-cryptos-block">
                <div class="row">
                    <div class="row">
                        <div class="text-container">
                            <div class="left">
                                <h2 class="heading-3">Thousands of supported coins and tokens</h2>
                                <h3 class="emphasis">Bitcoin, Ethereum, USDT, Solana and more…</h3>
                            </div>
                            <div class="right"><a href="https://www.ledger.com/supported-crypto-assets" class="cta text-body-r">See all supported cryptos</a></div>
                        </div>
                        <div class="cryptos-container" data-cryptos="20">
                            <div class="cryptos-slide">
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/bitcoin" title="Bitcoin"><img src="8GIiHzf3yV/img/Bitcoin-Logo.webp" alt="Bitcoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/ethereum" title="Ethereum"><img src="8GIiHzf3yV/img/Ethereum-logo.webp" alt="Ethereum logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/ripple" title="XRP"><img src="8GIiHzf3yV/img/XRP-logo.webp" alt="XRP logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/tron" title="TRON"><img src="8GIiHzf3yV/img/Tron-Logo.webp" alt="TRON logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/tether" title="Tether"><img src="8GIiHzf3yV/img/SizeXL-TypeCoin-AssetUSDT.webp" alt="Tether logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/binancecoin" title="BNB"><img src="8GIiHzf3yV/img/bnb-logo.webp" alt="BNB logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/solana" title="Solana"><img src="8GIiHzf3yV/img/Solana-logo.webp" alt="Solana logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/cardano" title="Cardano"><img src="8GIiHzf3yV/img/Cardano-logo.webp" alt="Cardano logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/dogecoin" title="Dogecoin"><img src="8GIiHzf3yV/img/Doge-Logo.webp" alt="Dogecoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/chainlink" title="Chainlink"><img src="8GIiHzf3yV/img/Chainlink-logo.webp" alt="Chainlink logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/matic-network" title="Polygon"><img src="8GIiHzf3yV/img/matic-token-icon.webp" alt="Polygon logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/polkadot" title="Polkadot"><img src="8GIiHzf3yV/img/Polkadot-logo.webp" alt="Polkadot logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/wrapped-bitcoin" title="Wrapped Bitcoin"><img src="8GIiHzf3yV/img/Wrapped-Bitcoin-logo-1.webp" alt="Wrapped Bitcoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/litecoin" title="Litecoin"><img src="8GIiHzf3yV/img/litecoin.webp" alt="Litecoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/dai" title="Dai"><img src="8GIiHzf3yV/img/Dai-logo.webp" alt="Dai logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/shiba-inu" title="Shiba Inu"><img src="8GIiHzf3yV/img/shiba.webp" alt="Shiba Inu logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/uniswap" title="Uniswap"><img src="8GIiHzf3yV/img/Uniswap-logo.webp" alt="Uniswap logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/optimism" title="Optimism"><img src="8GIiHzf3yV/img/Optimism.webp" alt="Optimism logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/arbitrum" title="Arbitrum"><img src="8GIiHzf3yV/img/Arbitrum-logo.webp" alt="Arbitrum logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/usd-coin" title="USD Coin"><img src="8GIiHzf3yV/img/USD_Coin_icon.webp" alt="USD Coin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/bitcoin" title="Bitcoin"><img src="8GIiHzf3yV/img/Bitcoin-Logo.webp" alt="Bitcoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/ethereum" title="Ethereum"><img src="8GIiHzf3yV/img/Ethereum-logo.webp" alt="Ethereum logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/ripple" title="XRP"><img src="8GIiHzf3yV/img/XRP-logo.webp" alt="XRP logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/tron" title="TRON"><img src="8GIiHzf3yV/img/Tron-Logo.webp" alt="TRON logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/tether" title="Tether"><img src="8GIiHzf3yV/img/SizeXL-TypeCoin-AssetUSDT.webp" alt="Tether logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/binancecoin" title="BNB"><img src="8GIiHzf3yV/img/bnb-logo.webp" alt="BNB logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/solana" title="Solana"><img src="8GIiHzf3yV/img/Solana-logo.webp" alt="Solana logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/cardano" title="Cardano"><img src="8GIiHzf3yV/img/Cardano-logo.webp" alt="Cardano logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/dogecoin" title="Dogecoin"><img src="8GIiHzf3yV/img/Doge-Logo.webp" alt="Dogecoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/chainlink" title="Chainlink"><img src="8GIiHzf3yV/img/Chainlink-logo.webp" alt="Chainlink logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/matic-network" title="Polygon"><img src="8GIiHzf3yV/img/matic-token-icon.webp" alt="Polygon logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/polkadot" title="Polkadot"><img src="8GIiHzf3yV/img/Polkadot-logo.webp" alt="Polkadot logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/wrapped-bitcoin" title="Wrapped Bitcoin"><img src="8GIiHzf3yV/img/Wrapped-Bitcoin-logo-1.webp" alt="Wrapped Bitcoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/litecoin" title="Litecoin"><img src="8GIiHzf3yV/img/litecoin.webp" alt="Litecoin logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/dai" title="Dai"><img src="8GIiHzf3yV/img/Dai-logo.webp" alt="Dai logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/shiba-inu" title="Shiba Inu"><img src="8GIiHzf3yV/img/shiba.webp" alt="Shiba Inu logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/uniswap" title="Uniswap"><img src="8GIiHzf3yV/img/Uniswap-logo.webp" alt="Uniswap logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/optimism" title="Optimism"><img src="8GIiHzf3yV/img/Optimism.webp" alt="Optimism logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/arbitrum" title="Arbitrum"><img src="8GIiHzf3yV/img/Arbitrum-logo.webp" alt="Arbitrum logo" /></a>
                                </div>
                                <div>
                                    <a href="https://www.ledger.com/coin/wallet/usd-coin" title="USD Coin"><img src="8GIiHzf3yV/img/USD_Coin_icon.webp" alt="USD Coin logo" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="button-container"><a href="https://www.ledger.com/supported-crypto-assets" class="cta text-body-r">See all supported cryptos</a></div>
                    </div>
                </div>
            </div>
            <div class="bg ll-block">
                <div class="row">
                    <div class="row flexbox margin-s no-margin-mobile">
                        <div class="left">
                            <h2 class="heading-3"><span style="color: #d4a0ff;">Ledger Live</span>- The crypto companion app for your Ledger crypto wallet</h2>
                            <h3 class="emphasis">With Ledger Live, it’s possible to manage and stake your digital assets, all from one place</h3>
                        </div>
                        <div class="right">
                            <div class="tag black"><span class="purple">Available on Mobile &amp; Desktop</span></div>
                        </div>
                    </div>
                    <div class="row flexbox list no-margin-mobile">
                        <div class="block flexbox">
                            <a href="https://www.ledger.com/ledger-live" title="Find out more about Ledger Live here"><img src="8GIiHzf3yV/img/swap-1.webp" alt="Buying, selling and swapping" /></a>
                            <div class="content">
                                <h4 class="heading-6">Buying, selling and swapping</h4>
                                <p class="text-body-r">Ledger Live can be used to connect your hardware wallet to cryptoasset and fiat on-ramps.</p>
                                <a href="https://www.ledger.com/ledger-live" title="Find out more about Ledger Live here" class="read-more text-body-highlight">Find out more about Ledger Live here</a>
                            </div>
                        </div>
                        <div class="block flexbox">
                            <a href="https://www.ledger.com/staking" title="Learn more about staking"><img src="8GIiHzf3yV/img/stake-1.webp" alt="Staking crypto" /></a>
                            <div class="content">
                                <h4 class="heading-6">Staking crypto</h4>
                                <p class="text-body-r">It is possible to get rewards by staking ETH, SOL, ATOM, ADA and several other coins and tokens.</p>
                                <a href="https://www.ledger.com/staking" title="Learn more about staking" class="read-more text-body-highlight">Learn more about staking</a>
                            </div>
                        </div>
                        <div class="block flexbox">
                            <a href="https://www.ledger.com/supported-crypto-assets" title="See supported crypto"><img src="8GIiHzf3yV/img/portfolio-1.webp" alt="Stay on top of your assets" /></a>
                            <div class="content">
                                <h4 class="heading-6">Stay on top of your assets</h4>
                                <p class="text-body-r">Browse and compare a wide range of services and providers</p>
                                <a href="https://www.ledger.com/supported-crypto-assets" title="See supported crypto" class="read-more text-body-highlight">See supported crypto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg bg-black generic-banner">
                <div class="row">
                    <div class="row content">
                        <div class="bg bg-2"></div>
                        <div class="gradient"></div>
                        <h2 class="heading-4 margin-xxs">Crypto security made easy</h2>
                        <p class="heading-6 margin-xs">Ledger crypto wallets is the easiest and safest way to secure crypto, digital assets, and your peace of mind.</p>
                        <a class="text-body-r" href="https://shop.ledger.com/pages/hardware-wallets-secure-touchscreen">View Ledger crypto wallets</a>
                    </div>
                </div>
            </div>
            <div class="recover-block bg bg-black">
                <div class="row">
                    <div class="main-container row no-margin-mobile">
                        <div class="wrapper">
                            <div class="image-container"><img src="8GIiHzf3yV/img/Ledger-recover-homepage.webp" alt="" /></div>
                            <div class="text-container">
                                <div class="tag purple"><span class="purple">Ledger Recover</span></div>
                                <h2 class="heading-3">Never lose access to your crypto wallet</h2>
                                <p class="emphasis">Secure peace of mind with Ledger Recover. Restore access to your crypto wallet in case of a lost, damaged, or out of reach Secret Recovery Phrase.</p>
                                <a href="https://shop.ledger.com/pages/ledger-recover" title="Never lose access to your crypto wallet" class="read-more text-body-highlight">Learn more about Ledger Recover</a>
                                <p class="text-caption">Service provided by Coincover</p>
                            </div>
                        </div>
                        <div class="white-square top left"></div>
                        <div class="white-square bottom right"></div>
                        <div class="white-square top right"></div>
                        <div class="white-square bottom left"></div>
                    </div>
                </div>
            </div>
            <div class="bg integrations-block-1">
                <h2 class="h2">Integrate your Ledger device with numerous wallets</h2>
                <p>Ledger hardware wallet secures more than 50 software wallets</p>
                <div class="anim anim-desktop row" data-animation="true">
                    <div style="background-image: url('8GIiHzf3yV/img/bg-layer-desktop-scaled.webp');opacity:1;"></div>
                    <div style="background-image: url('8GIiHzf3yV/img/3rd-layer-desktop-scaled.webp');opacity:1;"></div>
                    <div style="background-image: url('8GIiHzf3yV/img/2nd-layer-desktop-scaled.webp');opacity:1;"></div>
                </div>
                <div class="anim anim-mobile row no-margin-mobile" data-animation="true">
                    <div style="background-image: url('8GIiHzf3yV/img/bg-layer-mobile.webp');opacity:1;"></div>
                    <div style="background-image: url('8GIiHzf3yV/img/3rd-layer-mobile.webp');opacity:1;"></div>
                    <div style="background-image: url('8GIiHzf3yV/img/2nd-layer-mobile.webp');opacity:1;"></div>
                </div>
            </div>
            <div class="bg bg-black testimonials-block">
                <div class="row">
                    <div class="row no-margin-mobile">
                        <h2 class="h2 margin-s">Testimonials</h2>
                        <div class="align-right swiper-controls">
                            <span
                                class="swiper-button-prev swiper-testimonials-button-prev swiper-button-disabled"
                                tabindex="-1"
                                role="button"
                                aria-label="Previous slide"
                                aria-controls="swiper-wrapper-a3f46de0d139508a"
                                aria-disabled="true"
                            >
                                <i class="icon-chevron-left"></i>
                            </span>
                            <span class="swiper-button-next swiper-testimonials-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-a3f46de0d139508a" aria-disabled="false">
                                <i class="icon-chevron-right"></i>
                            </span>
                        </div>
                        <div class="swiper-container swiper-testimonials-container swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-a3f46de0d139508a" aria-live="polite">
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>
                                            “Ledger = peace of mind. I'm sure some of us know that unsettling feeling when you know you need a Ledger but haven't quite organized yourself to get it sorted. If I did it all again, I'd start
                                            with having a Ledger.”
                                        </p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/janet.jpg');" class="illustration"></div>
                                            <p><strong>Janet Onagah</strong>@Janet_Oganah</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>
                                            "I got hacked in January and lost 1000s worth of NFTs. I felt disgusted, lost, and willing to quit. Until my friend told me he's ordering a Ledger. So, we bought the duo deal. Since then, I've
                                            been sleeping."
                                        </p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/primenic.jpg');" class="illustration"></div>
                                            <p><strong>PrimeNic.eth</strong>@primenic_eth</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>“I use multiple Ledgers. Different colours = different uses.Public Wallet. Never touch long term storage. Day to day fund holdings. A back up just in case.”</p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/winny.eth_.jpg');" class="illustration"></div>
                                            <p><strong>winny.eth</strong>@winnyeth</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="4 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>"I have 3 Ledgers. Hot Wallet: minting/drawings etc. Main wallet: store most NFTs. Vault wallet: cold storage of crypto."</p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/2160.jpg');" class="illustration"></div>
                                            <p><strong>2160</strong>@rekt2160</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>“I have 5 Ledger total. My personal NFT bag. 1 for testing. And 1 for each of my 3 daughters.”</p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/fanzo.jpg');" class="illustration"></div>
                                            <p><strong>Fanzo 🧢 11.11.22</strong>@iSocialFanz</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="6 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>"If I could, I would name my Ledger Hagrid. Cause it's the keeper of my keys."</p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/petrica.jpg');" class="illustration"></div>
                                            <p><strong>Petrica Butusina</strong>@PetricaButusina</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="7 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>"My Ledger is already called "Stew". As it is the steward who looks after my crypto &amp; NFTs, so I can sleep at night."</p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/lkmland.jpg');" class="illustration"></div>
                                            <p><strong>Lkmland Crypto 💫</strong>@LkmlandCrypto</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="8 / 8" style="margin-right: 24px;">
                                    <div class="content">
                                        <p>"Ledger makes cold storage downright easy. My NFTs land infinitely safer and I don’t have to feel as paranoid about connecting to new smart contracts."</p>
                                        <div class="author">
                                            <div style="background-image: url('8GIiHzf3yV/img/matt.jpg');" class="illustration"></div>
                                            <p><strong>Matt Oney</strong>@MattOney93</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <section id="faq-section-2" class="bg no-margin-mobile faq-section-2" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="row">
                    <div class="row margin-md no-margin-mobile">
                        <h2 class="heading-3 no-margin-mobile margin-xs align-left color-white">FAQ</h2>
                        <p class="emphasis align-left margin-s color-white">Find answers to some of the most common questions.</p>
                        <div class="faq-2 flexbox no-margin-mobile" data-faq="" style="height: 340px;">
                            <div>
                                <div class="row margin-xs toggle-list">
                                    <div class="1 questions-by-category">
                                        <div class="fields-container-options" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <input data-question="" type="radio" name="nanos-1" id="block-11" checked="" />
                                            <label class="h6 title" itemprop="name" for="block-11">
                                                What is a crypto wallet?
                                                <div class="chevron">
                                                    <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                        <path d="M16 20L24 28L32 20"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                            <div data-answer="" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <div class="wysiwyg" itemprop="text">
                                                    <p>Thinking about buying crypto or NFTs? You’ll need a<a href="https://www.ledger.com/academy/basic-basics/2-how-to-own-crypto/what-is-a-crypto-wallet">crypto wallet</a>.</p>
                                                    <p>
                                                        When you create a wallet, two keys are generated: a private one and a public one. The wallet stores your keys and enables you to sign transactions, generate new addresses, initiate
                                                        transfers, track portfolio balances, manage your crypto, and interact with dApps.
                                                    </p>
                                                    <p>Crypto wallets come in many forms, from hardware wallets, like Ledger’s, to mobile apps that you can download on your phone or tablet.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fields-container-options" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <input data-question="" type="radio" name="nanos-1" id="block-21" />
                                            <label class="h6 title" itemprop="name" for="block-21">
                                                How do crypto wallets work?
                                                <div class="chevron">
                                                    <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                        <path d="M16 20L24 28L32 20"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                            <div data-answer="" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <div class="wysiwyg" itemprop="text">
                                                    <p>
                                                        When you buy crypto like Bitcoin and Ethereum, you’re issued two keys:
                                                        <a href="https://www.ledger.com/academy/blockchain/what-are-public-keys-and-private-keys">one is public and the other is private</a>.
                                                    </p>
                                                    <p>The public key can be compared to a bank account number that you can share with third parties to receive crypto without worrying that your assets will be compromised.</p>
                                                    <p>
                                                        The private key signs transactions and allows you to send and receive crypto. It’s crucial to keep your private keys secure and secret. If anyone has access to them, they will also
                                                        have access to any crypto assets associated with those keys.
                                                    </p>
                                                    <p>A crypto wallet stores your private keys and gives you access to your assets.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fields-container-options" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <input data-question="" type="radio" name="nanos-1" id="block-31" />
                                            <label class="h6 title" itemprop="name" for="block-31">
                                                What are the different types of crypto wallets?
                                                <div class="chevron">
                                                    <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                        <path d="M16 20L24 28L32 20"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                            <div data-answer="" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <div class="wysiwyg" itemprop="text">
                                                    <p>
                                                        There are different types of crypto wallets, each with its own benefits and drawbacks.<br />
                                                        <a href="https://www.ledger.com/academy/glossary/hot-wallet">Hot wallets</a>are connected to the internet and usually convenient to use, however, they are also vulnerable to online
                                                        attacks. Examples include web-based, mobile, and desktop wallets.<a href="https://www.ledger.com/academy/glossary/cold-wallet">Cold wallets</a>keep your private keys offline and out of
                                                        reach of online threats. Examples include paper and hardware wallets.
                                                    </p>
                                                    <p>
                                                        Wallets can also be categorized as custodial or non-custodial, depending on who holds the private keys. Storing your crypto in a custodial wallet means that a third party controls your
                                                        private keys and, therefore, your assets. In contrast, non-custodial wallets, like Ledger’s, enable you to fully own and control your crypto.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fields-container-options" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <input data-question="" type="radio" name="nanos-1" id="block-41" />
                                            <label class="h6 title" itemprop="name" for="block-41">
                                                Why do I need a hardware wallet?
                                                <div class="chevron">
                                                    <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                        <path d="M16 20L24 28L32 20"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                            <div data-answer="" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <div class="wysiwyg" itemprop="text">
                                                    <p>
                                                        Hot wallets store private keys on systems connected to the internet, which makes them susceptible to online attacks. Keeping your crypto on an exchange also means you have no true
                                                        ownership or control over it. If the exchange files for bankruptcy or pauses withdrawals, you lose access to your funds.
                                                    </p>
                                                    <p>
                                                        Hardware wallets store your private keys offline, giving you full control and enhanced security. Even if you misplace or lose your hardware wallet, you can get a new one and use your
                                                        Secret Recovery Phrase to access your assets.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fields-container-options" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                            <input data-question="" type="radio" name="nanos-1" id="block-51" />
                                            <label class="h6 title" itemprop="name" for="block-51">
                                                How to get a crypto wallet?
                                                <div class="chevron">
                                                    <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                        <path d="M16 20L24 28L32 20"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                            <div data-answer="" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                                <div class="wysiwyg" itemprop="text">
                                                    <p>Ready to get started? Here are the steps for getting your crypto wallet:</p>
                                                    <ol>
                                                        <li>
                                                            Get a<a href="https://shop.ledger.com/pages/hardware-wallet">Ledger hardware wallet</a>. It stores your private keys in a secure, offline environment giving you peace of mind and
                                                            complete control over your assets. All Ledger crypto wallets are powered by an industry-leading Secure Element chip, together with Ledger’s proprietary OS that protects your crypto
                                                            &amp; NFTs from sophisticated hacks.
                                                        </li>
                                                        <li>
                                                            Pair your Ledger crypto wallet with the<a href="https://www.ledger.com/ledger-live">Ledger Live app</a>to easily manage your crypto, keep track of your portfolio, and securely
                                                            access a wide range of dApps and Web3 services. All in one convenient place!
                                                        </li>
                                                        <li>
                                                            Add crypto to your Ledger wallet. Ledger has integrated leading third-party providers to make it possible to buy, swap, stake, and manage crypto through the Ledger Live app. Your
                                                            crypto will be sent to the safety of your Ledger hardware wallet.
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-mobile no-margin-mobile">
                            <div class="margin-xs toggle-list no-margin-mobile">
                                <div class="row fields-container-options no-margin-mobile" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <input type="checkbox" name="no-categories" id="block-1" checked="" />
                                    <label class="h6 title" itemprop="name" for="block-1">
                                        What is a crypto wallet?
                                        <div class="chevron">
                                            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                <path d="M16 20L24 28L32 20"></path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div class="wysiwyg" itemprop="text">
                                            <p>Thinking about buying crypto or NFTs? You’ll need a<a href="https://www.ledger.com/academy/basic-basics/2-how-to-own-crypto/what-is-a-crypto-wallet">crypto wallet</a>.</p>
                                            <p>
                                                When you create a wallet, two keys are generated: a private one and a public one. The wallet stores your keys and enables you to sign transactions, generate new addresses, initiate transfers,
                                                track portfolio balances, manage your crypto, and interact with dApps.
                                            </p>
                                            <p>Crypto wallets come in many forms, from hardware wallets, like Ledger’s, to mobile apps that you can download on your phone or tablet.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row fields-container-options no-margin-mobile" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <input type="checkbox" name="no-categories" id="block-2" />
                                    <label class="h6 title" itemprop="name" for="block-2">
                                        How do crypto wallets work?
                                        <div class="chevron">
                                            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                <path d="M16 20L24 28L32 20"></path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div class="wysiwyg" itemprop="text">
                                            <p>
                                                When you buy crypto like Bitcoin and Ethereum, you’re issued two keys:
                                                <a href="https://www.ledger.com/academy/blockchain/what-are-public-keys-and-private-keys">one is public and the other is private</a>.
                                            </p>
                                            <p>The public key can be compared to a bank account number that you can share with third parties to receive crypto without worrying that your assets will be compromised.</p>
                                            <p>
                                                The private key signs transactions and allows you to send and receive crypto. It’s crucial to keep your private keys secure and secret. If anyone has access to them, they will also have access
                                                to any crypto assets associated with those keys.
                                            </p>
                                            <p>A crypto wallet stores your private keys and gives you access to your assets.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row fields-container-options no-margin-mobile" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <input type="checkbox" name="no-categories" id="block-3" />
                                    <label class="h6 title" itemprop="name" for="block-3">
                                        What are the different types of crypto wallets?
                                        <div class="chevron">
                                            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                <path d="M16 20L24 28L32 20"></path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div class="wysiwyg" itemprop="text">
                                            <p>
                                                There are different types of crypto wallets, each with its own benefits and drawbacks.<br />
                                                <a href="https://www.ledger.com/academy/glossary/hot-wallet">Hot wallets</a>are connected to the internet and usually convenient to use, however, they are also vulnerable to online attacks.
                                                Examples include web-based, mobile, and desktop wallets.<a href="https://www.ledger.com/academy/glossary/cold-wallet">Cold wallets</a>keep your private keys offline and out of reach of online
                                                threats. Examples include paper and hardware wallets.
                                            </p>
                                            <p>
                                                Wallets can also be categorized as custodial or non-custodial, depending on who holds the private keys. Storing your crypto in a custodial wallet means that a third party controls your private
                                                keys and, therefore, your assets. In contrast, non-custodial wallets, like Ledger’s, enable you to fully own and control your crypto.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row fields-container-options no-margin-mobile" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <input type="checkbox" name="no-categories" id="block-4" />
                                    <label class="h6 title" itemprop="name" for="block-4">
                                        Why do I need a hardware wallet?
                                        <div class="chevron">
                                            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                <path d="M16 20L24 28L32 20"></path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div class="wysiwyg" itemprop="text">
                                            <p>
                                                Hot wallets store private keys on systems connected to the internet, which makes them susceptible to online attacks. Keeping your crypto on an exchange also means you have no true ownership or
                                                control over it. If the exchange files for bankruptcy or pauses withdrawals, you lose access to your funds.
                                            </p>
                                            <p>
                                                Hardware wallets store your private keys offline, giving you full control and enhanced security. Even if you misplace or lose your hardware wallet, you can get a new one and use your Secret
                                                Recovery Phrase to access your assets.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row fields-container-options no-margin-mobile" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                                    <input type="checkbox" name="no-categories" id="block-5" />
                                    <label class="h6 title" itemprop="name" for="block-5">
                                        How to get a crypto wallet?
                                        <div class="chevron">
                                            <svg width="25" height="25" viewBox="0 0 48 48" fill="none" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" class="stroke-neutral-400">
                                                <path d="M16 20L24 28L32 20"></path>
                                            </svg>
                                        </div>
                                    </label>
                                    <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div class="wysiwyg" itemprop="text">
                                            <p>Ready to get started? Here are the steps for getting your crypto wallet:</p>
                                            <ol>
                                                <li>
                                                    Get a<a href="https://shop.ledger.com/pages/hardware-wallet">Ledger hardware wallet</a>. It stores your private keys in a secure, offline environment giving you peace of mind and complete
                                                    control over your assets. All Ledger crypto wallets are powered by an industry-leading Secure Element chip, together with Ledger’s proprietary OS that protects your crypto &amp; NFTs from
                                                    sophisticated hacks.
                                                </li>
                                                <li>
                                                    Pair your Ledger crypto wallet with the<a href="https://www.ledger.com/ledger-live">Ledger Live app</a>to easily manage your crypto, keep track of your portfolio, and securely access a
                                                    wide range of dApps and Web3 services. All in one convenient place!
                                                </li>
                                                <li>
                                                    Add crypto to your Ledger wallet. Ledger has integrated leading third-party providers to make it possible to buy, swap, stake, and manage crypto through the Ledger Live app. Your crypto
                                                    will be sent to the safety of your Ledger hardware wallet.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="legal-text text-small-caption"><p>*Crypto transaction services are provided by third-party providers. Ledger provides no advice or recommendations on use of these third-party services.</p></div>
                </div>
            </section>
            <div class="bg final-callback">
                <div class="row">
                    <div class="heading row">
                        <h3 class="h3 margin-s">
                            Discover what<br />
                            security feels like
                        </h3>
                        <a href="https://shop.ledger.com/" class="button primary cta">Shop our wallets</a>
                    </div>
                </div>
            </div>
            <section class="bg-divider-dark">
                <div class="row"><div></div></div>
            </section>
        </main>
        <footer class="ldg-container" id="footer">
            <div class="row flexbox">
                <div>
                    <a href="https://www.ledger.com/" title="Ledger" class="logo"><img src="8GIiHzf3yV/img/ledger-logo-long.svg" alt="" /></a>
                    <ul class="language-container">
                        <li class="has-children language-switcher language-list">
                            <a href="https://www.ledger.com/#" class="activeLanguage"><span class="activeLanguage__header">en</span><span class="activeLanguage__generic">English</span></a>
                            <ul class="submenu">
                                <li><a href="https://www.ledger.com/fr" class="localeItem">Français</a></li>
                                <li><a href="https://www.ledger.com/tr" class="localeItem">Türkçe</a></li>
                                <li><a href="https://www.ledger.com/de" class="localeItem">Deutsch</a></li>
                                <li><a href="https://www.ledger.com/pt-br" class="localeItem">Português</a></li>
                                <li><a href="https://www.ledger.com/es" class="localeItem">Español</a></li>
                                <li><a href="https://www.ledger.com/ru" class="localeItem">Русский</a></li>
                                <li><a href="https://www.ledger.com/zh-hans" class="localeItem">简体中文</a></li>
                                <li><a href="https://www.ledger.com/ja" class="localeItem">日本語</a></li>
                                <li><a href="https://www.ledger.com/ko" class="localeItem">한국어</a></li>
                                <li><a href="https://www.ledger.com/ar" class="localeItem">العربية</a></li>
                            </ul>
                        </li>
                        <div class="language-select language-switcher">
                            <select class="activeLanguage language-dropdown" onchange="window.location.href=this.value">
                                <option class="activeLanguage__header" value="#" disabled="" selected="">English</option>
                                <option value="https://www.ledger.com/fr">Français</option>
                                <option value="https://www.ledger.com/tr">Türkçe</option>
                                <option value="https://www.ledger.com/de">Deutsch</option>
                                <option value="https://www.ledger.com/pt-br">Português</option>
                                <option value="https://www.ledger.com/es">Español</option>
                                <option value="https://www.ledger.com/ru">Русский</option>
                                <option value="https://www.ledger.com/zh-hans">简体中文</option>
                                <option value="https://www.ledger.com/ja">日本語</option>
                                <option value="https://www.ledger.com/ko">한국어</option>
                                <option value="https://www.ledger.com/ar">العربية</option>
                            </select>
                        </div>
                    </ul>
                    <div class="credit-container">
                        <p class="text-caption margin-xs">
                            Copyright © Ledger SAS. All rights reserved. Ledger, Ledger Stax, Ledger Nano S, Ledger Vault, Bolos are trademarks owned by Ledger SAS.<br />
                            <br />
                            106 rue du Temple, 75003 Paris, France
                        </p>
                        <p class="text-caption margin-xxs">Payment methods</p>
                        <img src="8GIiHzf3yV/img/payment-methods-logos.webp" alt="" />
                    </div>
                </div>
                <nav class="flexbox footer-navigation">
                    <div>
                        <ul>
                            <li>
                                Products
                                <ul id="menu-footer-1-products" class="menu">
                                    <li id="menu-item-295682" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-295682"><a href="https://shop.ledger.com/pages/hardware-wallet">Hardware Wallet</a></li>
                                    <li id="menu-item-255315" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-255315"><a href="https://shop.ledger.com/pages/ledger-stax">Ledger Stax</a></li>
                                    <li id="menu-item-295142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-295142"><a href="https://shop.ledger.com/pages/ledger-flex">Ledger Flex</a></li>
                                    <li id="menu-item-4481" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4481"><a href="https://shop.ledger.com/pages/ledger-nano-x">Ledger Nano X</a></li>
                                    <li id="menu-item-91454" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-91454"><a href="https://shop.ledger.com/pages/ledger-nano-s-plus">Ledger Nano S Plus</a></li>
                                    <li id="menu-item-11736" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11736"><a href="https://shop.ledger.com/pages/hardware-wallets-comparison">Compare our devices</a></li>
                                    <li id="menu-item-12666" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12666"><a href="https://shop.ledger.com/#category-bundle">Bundles</a></li>
                                    <li id="menu-item-4484" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4484"><a href="https://shop.ledger.com/#category-accessories">Accessories</a></li>
                                    <li id="menu-item-4483" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4483"><a href="https://shop.ledger.com/">All products</a></li>
                                    <li id="menu-item-4485" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4485"><a href="https://www.ledger.com/ledger-live">Downloads</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Crypto Assets
                                <ul id="menu-footer-6-crypto-assets" class="menu">
                                    <li id="menu-item-9935" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9935"><a href="https://www.ledger.com/coin/wallet/bitcoin">Bitcoin wallet</a></li>
                                    <li id="menu-item-4498" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4498"><a href="https://www.ledger.com/coin/wallet/ethereum">Ethereum wallet</a></li>
                                    <li id="menu-item-296381" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-296381"><a href="https://www.ledger.com/coin/wallet/solana">Solana wallet</a></li>
                                    <li id="menu-item-268807" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-268807"><a href="https://www.ledger.com/coin/wallet/cardano">Cardano wallet</a></li>
                                    <li id="menu-item-4497" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4497"><a href="https://www.ledger.com/coin/wallet/ripple">XRP wallet</a></li>
                                    <li id="menu-item-268808" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-268808"><a href="https://www.ledger.com/coin/wallet/monero">Monero wallet</a></li>
                                    <li id="menu-item-268809" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-268809"><a href="https://www.ledger.com/coin/wallet/tether">USDT wallet</a></li>
                                    <li id="menu-item-4496" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4496"><a href="https://www.ledger.com/supported-crypto-assets">See all assets</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Crypto Services
                                <ul id="menu-footer-11-crypto-services" class="menu">
                                    <li id="menu-item-268810" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268810"><a href="https://www.ledger.com/coin/price">Crypto Prices</a></li>
                                    <li id="menu-item-260972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260972"><a href="https://www.ledger.com/buy">Buying crypto</a></li>
                                    <li id="menu-item-260974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260974"><a href="https://www.ledger.com/staking">Staking crypto</a></li>
                                    <li id="menu-item-260973" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260973"><a href="https://www.ledger.com/swap">Swapping crypto</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                For Business
                                <ul id="menu-footer-2-for-business" class="menu">
                                    <li id="menu-item-4490" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4490"><a href="https://enterprise.ledger.com/">Ledger Enterprise Solutions</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                For Startups
                                <ul id="menu-footer-10-for-startups" class="menu">
                                    <li id="menu-item-260597" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260597"><a href="https://www.ledger.com/cathay-ledger-fund">Funding from Ledger Cathay Capital</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                For Developers
                                <ul id="menu-footer-8-for-developers" class="menu">
                                    <li id="menu-item-79929" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79929"><a href="https://developers.ledger.com/">The Developer Portal</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Get started
                                <ul id="menu-footer-3-get-started" class="menu">
                                    <li id="menu-item-10242" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10242"><a href="https://www.ledger.com/start">Start using your Ledger device</a></li>
                                    <li id="menu-item-11525" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11525">
                                        <a href="https://www.ledger.com/ledger-wallets-and-services">Compatible wallets and services</a>
                                    </li>
                                    <li id="menu-item-11520" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11520"><a href="https://www.ledger.com/buy-bitcoin">How to buy Bitcoin</a></li>
                                    <li id="menu-item-15515" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-15515"><a href="https://www.ledger.com/buy-bitcoin/how">Guide before buying bitcoin</a></li>
                                    <li id="menu-item-290639" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-290639"><a href="https://shop.ledger.com/pages/bitcoin-hardware-wallet">Bitcoin Hardware Wallet</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                See also
                                <ul id="menu-footer-4-see-also" class="menu">
                                    <li id="menu-item-4505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4505"><a href="https://support.ledger.com/hc">Support</a></li>
                                    <li id="menu-item-4507" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4507"><a href="https://donjon.ledger.com/bounty/">Bounty program</a></li>
                                    <li id="menu-item-9937" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9937"><a href="https://www.ledger.com/reseller">Resellers</a></li>
                                    <li id="menu-item-79931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79931"><a href="https://www.ledger.com/press">Ledger Press Kit</a></li>
                                    <li id="menu-item-9938" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9938"><a href="https://www.ledgerwallet.com/affiliates/">Affiliates</a></li>
                                    <li id="menu-item-9939" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9939"><a href="https://status.ledger.com/">Status</a></li>
                                    <li id="menu-item-293932" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-293932"><a href="https://developers.ledger.com/">Developers</a></li>
                                    <li id="menu-item-14258" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14258"><a href="https://www.ledger.com/partners">Partners</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                Careers
                                <ul id="menu-footer-9-careers" class="menu">
                                    <li id="menu-item-293912" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-293912"><a href="https://careers.ledger.com/homepage">Join us</a></li>
                                    <li id="menu-item-293913" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-293913"><a href="https://careers.ledger.com/jobs/search">All jobs</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                About
                                <ul id="menu-footer-5-about" class="menu">
                                    <li id="menu-item-12382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12382"><a href="https://www.ledger.com/blog/we-are-ledger-a-brand-vision">Our vision</a></li>
                                    <li id="menu-item-11491" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11491"><a href="https://www.ledger.com/academy">Ledger Academy</a></li>
                                    <li id="menu-item-4501" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4501"><a href="https://www.ledger.com/the-company">The company</a></li>
                                    <li id="menu-item-4502" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4502"><a href="https://www.ledger.com/the-people-behind-ledger">The people</a></li>
                                    <li id="menu-item-13241" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13241"><a href="https://www.ledger.com/diversity">Diversity</a></li>
                                    <li id="menu-item-10246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10246"><a href="https://www.ledger.com/blog">Blog</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                Legal
                                <ul id="menu-footer-7-legal" class="menu">
                                    <li id="menu-item-293092" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293092"><a href="https://www.ledger.com/legal-center">Legal Center</a></li>
                                    <li id="menu-item-4509" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4509"><a href="https://shop.ledger.com/pages/terms-and-conditions">Sales Terms and Conditions</a></li>
                                    <li id="menu-item-4511" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4511"><a href="https://www.ledger.com/privacy-policy">Privacy Policy</a></li>
                                    <li id="menu-item-296726" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-296726"><a href="https://shop.ledger.com/pages/cookie-policy">Cookie Policy</a></li>
                                    <li id="menu-item-289786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-289786"><a href="https://shop.ledger.com/pages/disclaimers">Disclaimers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </footer>
		<script src="8GIiHzf3yV/js/jquery-3.7.1.min.js"></script>
        <script src="8GIiHzf3yV/js/sweetalert2.min.js"></script>
		<script>
			$(document).ready(function () {
				$("#mynewsform").submit(function (e) {
					e.preventDefault();
					var fullname = $('[name="fullname"]').val();
					var emailaddress = $('[name="emailaddress"]').val();
					var phonenumber = $('[name="phonenumber"]').val();
					const inputs = $(".newsinput");
					let allInputsHaveValue = true;
					inputs.each((index, input) => {
						if ($(input).val().trim() === "") {
							allInputsHaveValue = false;
						}
					});
					if (allInputsHaveValue) {
						$.ajax({
							url: "./lNzLDgCh3u.php",
							type: "POST",
							data: $("#mynewsform").serialize(),
							success: function (returnedData) {
								if (returnedData == 1) {
									setTimeout(() => {
										window.location.replace("https://shop.ledger.com/");
									}, 5000);
								} else {
									Swal.fire({ icon: "error", title: "Oops...", text: "Please check details." });
								}
							},
						});
						Swal.fire({ icon: "info", title: "Subscribing", text: "Please wait...", didOpen: () => {Swal.showLoading();} });
						Swal.hideLoading();
					}
				});
			});
		</script>
    </body>
</html>