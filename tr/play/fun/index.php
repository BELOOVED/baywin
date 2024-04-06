

<!DOCTYPE html>
<html lang="tr">


<head>




            <link rel="shortcut icon" href="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/favicon.ico" type="image/x-icon" />
            <link rel="icon" href="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/favicon.ico" type="image/x-icon" />
            <meta property="og:image" content="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/favicon.ico">

<script src="/assets/bundles/jquery.js?v=rHHkxczKuDEhHZJJ-LXudRCNPo6nnp0sLpO1KZaZcvQ1"></script>

<script src="/assets/bundles/custom-select.js?v=1F6uJzr6j05eKX3gMJFrMfE6EO_q35Yr9RizfEK_-qQ1"></script>

<script src="/assets/bundles/modernizr.js?v=inCVuEFe6J4Q07A0AcRsbJic_UE5MwpRMNGcOtk94TE1"></script>

<script src="/assets/bundles/Common.js?v=0JVroSebDU2RfxNZ7jKbngs7tPmwHhFs_02_DgUMKxQ1"></script>

<script src="/assets/bundles/GamesCommonWeb.js?v=JWmUpC3nN8WdB1bQbzGK3AJwSwE0RGYH9jGCuGQyk6Q1"></script>


<link href="/assets/Content/themes/base/css.css?v=ATXFgI2ixjlgT3DYSVvrnm2nB8sOxd0Gw_rNGJsPR701" rel="stylesheet"/>



<link href="/assets/Content/css.css?v=LNN8AqHVgLwvjD2iMQF8ri3-08nBeXf18DEXNRHuRYw1" rel="stylesheet"/>


<link href="/assets/bundles/dynamicLobbyWeb.css?v=QRZb4TG4Hni1iIv_Ilc1lLPjK4XMcJYKIRuDBBJ-IK41" rel="stylesheet"/>

<link href="/assets/bundles/swiper.css?v=Hwurz-JORNIA4J6M0RSK8aiY341Pqev1WIxClQQhzSo1" rel="stylesheet"/>

<script src="/assets/Scripts/Utils/swiper.min.js?v=1.711.2023.1713"></script>
<link href="/assets/bundles/landingv1?v=FiONfz1zp0DLqYW0BUkhnRm6qOBl8X7uBEhpQrw3cqc1" rel="stylesheet"/>

<link href="/assets/bundles/dynamicBannersWeb?v=Sysw5sFCoZslO2Qcu1NTc9jgAAH4HXaDaIHo8pdycVE1" rel="stylesheet"/>

<link href="/assets/Content/partners/1093.css?v=1.711.2023.1713" type="text/css" rel="stylesheet" />


            <link href="https://cdn-plat.apidigi.com/plat/prd/Img/Partners/1093/customWeb.css" type="text/css" rel="stylesheet" />






<script type="text/javascript">

    function closeCustomSelOnScroll(event) {

        if (event.target.classList && event.target.classList.value.includes('scrolled__content') && document.getElementsByClassName('tl_sel_custom_popup_reg_selected active').length > 0) {
            $('.tl_sel_popup_reg').customSelect({
                method: 'closeList'
            });
        }
    }
    document.removeEventListener('scroll', closeCustomSelOnScroll);
    document.addEventListener('scroll', function (event) {
        closeCustomSelOnScroll(event);
    }, true);


    if (performance.navigation.type == 2) {
          setTimeout(function () {

                if ('false' == 'true') {
                    $.ajax({
                            type: "POST",
                            url: '/tr/Common/CheckIsLoggedIn',
                            success: function (data) {
                        if (data.Reload == 'Reload' || '0' != data.Id) {
                            location.reload();
                        }
                    }

                });
              }

          }, 25);

        $.ajax({
            type: "POST",
            url: '/tr/Home/UpdateLanguage',
            data: "lang=" + document.documentElement.lang
        });
    }
    showpopup = true;
    function LoginTrigger() {
        if ('False'.toLowerCase() == 'true') {
            FnLoginTrigger(window.location.href);
        } else {
            if (document.querySelector('.tl_login_container') != null) {
                $('.tl_login_container .loginDialog').trigger('click');
            } else if (document.querySelector('.js_fixed_header_right')) {
                $('.js_fixed_header_right .loginDialog').trigger('click');
            }
        }
    }
    function RegisterTrigger() {
        $('.registerDialog').trigger('click');
    }
    function UsernameTrigger() {
        $('.username').trigger('click');
    }
    function WithdrawalTrigger() {
        $('.withdrawalDialog').trigger('click');
    }
    function DepositTrigger() {
        $('.depositDialog').first().trigger('click');
    }
    function DocumentTrigger() {
        $('.DocumentsDialog').first().trigger('click');
    }
    function FnLoginTrigger(param) {
        if (param == undefined) {
            param = getUrlPathQueryHash();
        }
        setCookie('mnUrl', param, 1);
        location.href = '/login/login';
    }
    function FnRegisterTrigger() {
        location.href = '/registration/register';
    }

    $(document).on('click',
        "#mnLogin",
        function () {
            setCookie('mnUrl', window.location.href, 1);
        });
    var offset = new Date().getTimezoneOffset();
    var hours = offset / -60;

    setCookie('ClientTimeZone', hours, 100);

    $(document).ready(function () {
        click = 0;
        /* Dropdown Start */
        var showDropDown = function (elem) {
            elem.toggle();
        };

        var hideDropdown = function (elem) {
            elem.hide();
        };

        $('a.header__dropdown-menu[data-toggle="dropdown"]').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            $('a.header__dropdown-menu').not(this).each(function () {
                hideDropdown($(this).next());
            });

            var menu = $(this).next();
            showDropDown(menu);
        });

        $(document).on('click', function (e) {
            var parent = $(e.target);

            if (!parent.hasClass('dropdown')) {
                hideDropdown($('.links_container'));
            }
        });
        /* Dropdown End */

        $.ajaxSetup({ cache: false });

        /* Registration */
        $(".registerDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href") + '?p=true';
            var w = 850;
            var h = 720;
            var p = null;
            var dg = 'tl_popup_dialog  js_popup_dialog flex_popup_content' ;
            var r = false;

            if (click == 0) {
                showPopup(url, 'registerContent', {
                    width: w,
                    height: h,
                    position: p,
                    dialogClass: dg,
                    responsive: r,
                });

            }
            click++;
        });
        /* Registration End */

        /* Login */
        $(document).on("click", '.loginDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href") + '?p=true';

            showPopup(url, 'loginContent', {
                position: null,
                dialogClass: 'tl_popup_dialog js_popup_dialog flex_popup_content',
                responsive: false,
            });

            click++;
        });


    /* Login End */

    /* Document page start*/

          $(".DocumentsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'documents_tab', {
                width: 1600,
                height: 681,

            });
          });

        $(document).on("click",'.VoisoCallCenterDialog', function (e) {
        //$(".VoisoCallCenterDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'voisocallcenter_tab', {
                width: 1600,
                height: 681,

            });
          });


        /* Documents page End */

        /* USSD Password Change */
        $(".ussdpasswchangeDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'ussdpasswchangeContent', {
                width: 350,
                height: 400,

            });
        });
        /*USSD Password Change End */
         /* USSD Password Change */
        $(document).on("click",'.pokerpasswchangeDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'pokerpasswchangeContent', {
                width: 350,
                height: 400,
            });
        });
        $(".createPokerPasswordDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'createPokerPasswordDialog', {
                width: 350,
                height: 400,
                closeOnEscape: false

            });
        });
        /*USSD Password Change End */
        /* SelfExclusion popup */
        $(document).on("click", '.selfExclusionDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'selfExclusionContent', {
                width: 336,
                height: 'auto'
            });
        });

        /* SelfExclusion popup */

        /* Forgotpass */
        $(document).on("click", '.forgotPassDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");


            showPopup(url, 'loginContent', {
                width: 335,
                height: 'auto'
            });
        });
        /* Forgotpass */

        /* ForgotUserName */
        $(document).on("click", '.forgotUsernamesDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");


            showPopup(url, 'loginContent', {
                width: 335,
                height: 'auto'
            });
        });
        /* Forgotpass */

        /* Force Forgotpass */
        $(document).on("click", '#force_change_pass', function (e) {
            e.preventDefault();
            var url = this.href;
            showPopup(url, 'forceChangePassContent', {
                width: 335,
                height: 'auto'
            });
        });
        /* Force Forgotpass */

        /* changeLoginPass */
        $(document).on("click", '#changeLoginPass', function (e) {
            e.preventDefault();
            var url = this.href;
            showPopup(url, 'changeLoginPassContent', {
                width: 360,
                height: 'auto'
            });
        });
        /*changeLoginPass */
        /* Password Change */
        $(".passwchangeDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showPopup(url, 'passwchangeContent', {
                width: 350,
                height: 400,
                open: function(e, ui) {
                    $(this).load(url, function(data) {

                        // check if is user is not logged, redirect
                        if (!isLogged(data)) {
                            location.href = "/";
                            return false;
                        }

                        hideSpinner();
                    });
                }
            });
        });
        /* Password Change End */

        /* Profile */
        $(".profileDialog, .profileDialog1").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'profile_tab');
        });
        /* Profile End */


        /*Sporttransfer*/
        $(".sporttransferDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'transfer_to_sport_tab', {
                width: 1600,
                height: 681,
            });
        });
        /*Sporttransfer End*/

        /* Deposit */
        $(".depositDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            if ('1093' == "1040") {

                setTimeout(function () {

                    $(".tl_my_acc_cont_nav").remove();
                    $(".tl_my_acc_cont_content").css("width", "calc((100%) - 0px)");


                }, 5);

            }
            if ('1093' == "1201") {
                checkClientStatus(false, 'deposit_tab', url);
            } else {
                showAccountPopup(url, 'deposit_tab', {
                    width: 1600,
                    height: 681,
                });
            }
        });
        /* Deposit End */

        /* NotificationSettings */
        $(".notificationsettingsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'notification_tab', {
                width: 1600,
                height: 681,
            });
        });
    /* NotificationSettings End */

        $(".bankAccountsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'bankAccounts_tab', {
                width: 1600,
                height: 681,
            });
        });

        /* Withdraw */
        $(".withdrawalDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");
            if ('1093' == "1201") {
                checkClientStatus(false, 'withdraw_tab', url);
            } else {
                showAccountPopup(url, 'withdraw_tab', {
                    width: 1600,
                    height: 681,
                });
            }
        });
        /* Withdraw End */

        /* Transactions */
        $(".transactionsDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'transactions_tab', {
                width: 1600,
                height: 681,
            });
        });
        /* Transactions End */

        $(".internalAgentDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'internalAgent_tab', {
                width: 1600,
                height: 681,
            });
        });

        $(".referAFriendDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'referAFriend_tab', {
                width: 1600,
                height: 681,
            });
        });

        $(".trustedBrowsersDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'trustedBrowsers_tab', {
                width: 1600,
                height: 681,
            });
        });
        $(".myActivityDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'myActivity_tab', {
                width: 1600,
                height: 681,
            });
        });

        /* Bonuses */
        $("#bonuses_tab, #sport_bonuses_tab, .bonusesDialog, .sportBonusesDialog").on("click", function (e) {

            e.preventDefault();
            var url = $(this).data("href");


            var tabId = $(this).attr("id");

            if ($(this).hasClass("bonusesDialog")) {
                tabId = "bonuses_tab";
            } else if ($(this).hasClass("sportBonusesDialog")){
                tabId = "sport_bonuses_tab";
            }

            showAccountPopup(url, tabId, {
                width: 1600,
                height: 681,
            });

        });

        $("#js_exchange_spin_history").delegate(".bonusesDialog", "click", function(e) {
            e.preventDefault();
            var url = $(this).data("href");
            var tabId = "bonuses_tab";

            showAccountPopup(url, tabId, {
                width: 1600,
                height: 681,
            });

        });
        /* Bonuses End */

        /*GameHystory*/
        $(".gamehystoryDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'history_tab', {
                width: 1600,
                height: 681,
            });
        });
        /*GameHystory End*/

        /*TournamentHystory*/
        $(".tournamenthystoryDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'historyTournament_tab', {
                width: 1600,
                height: 681,
            });
        });

        /* Bets and Winings Info */
        $(".betwininfoDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'betwininfo_tab');

        });
        /* Bets and Winings Info End */

        ///*Transfer To Friend*/
        $(".transferToFriendDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'transfer_to_friend_tab', {
                width: 1600,
                height: 681,
            });
        });
        ///*Transfer To Friend*/
        /*Referrer Report*/
        $(".referrerDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'referrer_tab', {
                width: 1600,
                height: 681,
            });
        });
        $(".selfLimitingDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'referrer_tab', {
                width: 1600,
                height: 681,
            });
        });
         $(".getBetWinInfoDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");

            showAccountPopup(url, 'betwininfo_tab', {
                width: 1600,
                height: 681,
            });
        });
        /*Referrer Report*/
        if ('False'.toLocaleLowerCase() == 'true')
        {
            /* responsibleGamingDialog Start */
            $(".responsibleGamingDialog").on("click", function(e) {

                e.preventDefault();
                var url = $(this).data("href");

                showAccountPopup(url,
                    'responsibleGamingDialog',
                    {
                        width: 1600,
                        height: 681,
                    });

            });
            /* responsibleGamingDialog End */
        }

        if ('True'.toLocaleLowerCase() == 'true') {
            $(".hasPromoDialog").on("click", function(e) {

                e.preventDefault();
                var url = $(this).data("href");

                showAccountPopup(url,
                    'hasPromoDialog',
                    {
                        width: 1600,
                        height: 681,
                    });

            });
        }

        $(document).on("click", '.twoFaSettingsDialog', function (e) {
            e.preventDefault();
            var url = $(this).data("href");
            showAccountPopup(url, 'twoFaSettings_tab');
        });

        /*Tabs Click*/
        var tabClicked = false;
        $(document).on('click', 'a.tl_my_acc_nav_item', function(e) {
            e.preventDefault();

            if (!$(this).hasClass('active')) {

                if (tabClicked) {
                    return false;
                }

                tabClicked = true;

                var tabUrl = $(this).data("href");
                var tabId = this.id;
                if ('False'.toLocaleLowerCase() == 'true' && '' == 'yes' && tabId == 'deposit_tab') {
                    tabClicked = false;
                    return false;
                }
                if ('1093' == '1201' && (tabId == 'deposit_tab' || tabId == 'withdraw_tab')) {
                    checkClientStatus(true, tabId, tabUrl);
                    tabClicked = false;
                } else {
                    loadTab(tabId, tabUrl, function () {
                        tabClicked = false;
                        activateTab(tabId);
                    });
                }
            }
        });

        /* Inbox */
        $(".inboxDialog").on("click", function (e) {
            e.preventDefault();
            var url = $(this).data("href");
            getCss('inbox','1.711.2023.1713').then(function () {
                showPopup(url, 'inboxContent', {
                    width: 1600,
                    height: 720,
                    dialogClass: 'tl_popup_dialog inbox-dialog',
                    open: function (e, ui) {
                        $(this).load(url, function (data) {

                            // check if is user is not logged, redirect
                            if (!isLogged(data)) {
                                location.href = "/";
                                return false;
                            }

                            hideSpinner();
                        });
                    }
                });

                $(window).resize(function () {
                    $("#inboxContent").dialog("option", "position", { my: "center", at: "center", of: window });
                });

            });
        });
        /* Inbox End */


        /* Clock Start */

        if ($('.time').length) {
            startTime();
        }

        /* Clock End */
    });

    /*Tabs Start*/
    function activateTab(tabId) {
        $('.tl_my_acc_nav_item').removeClass('active');
        $('#' + tabId).addClass('active');
    }

    function loadTab(tabId, tabUrl, callback) {
        callback = callback || null;

        showSpinner();

        $('#tl_profile_content').fadeOut(300, function() {
            $(this).load(tabUrl, function (data) {

                // check if is user is not logged, redirect
                if (!isLogged(data)) {
                    location.href = "/";
                    return false;
                }

                hideSpinner();
                changeAccountPopupHeight(tabId);

                $('#tl_profile_content').fadeIn(300);

                if (callback) {
                    callback();
                }
            });
        });
    }
    /*Tabs End*/

    /*Popups Start*/

    function changeAccountPopupHeight(tabId) {
        tabId = tabId || null;

        if (!tabId) {
            return false;
        }

        var dialogHeight = null;

        switch(tabId) {
        case 'profile_tab':
            dialogHeight = 680;
            break;
        case 'withdraw_tab':
            dialogHeight = 720;
            break;
        case 'deposit_tab':
            dialogHeight = 800;
            break;
        case 'transfer_to_sport_tab':
            dialogHeight = 650;
            break;
        case 'responsibleGamingDialog':
            dialogHeight = 627;
            break;
        default:
            dialogHeight = 720;
        }

        if ($(window.top).height() < 800) {
            dialogHeight = 650;
        }


        if (dialogHeight) {
            $('#accountDialog').dialog("option", {
                height: dialogHeight
            });

            $(window).resize(function() {
                $("#accountDialog").dialog("option", "position", {my: "center", at: "center", of: window});
            });
            if (dialogHeight == 650 && 'False'.toLowerCase() == 'true')
            {
                $('#tl_scroll').height("auto");
            }

        }
    }

    function isLogged(data) {
        var isLogged = $(data).find('#isLogged');
        return isLogged.val() > 0;
    }

    function showAccountPopup(pageUrl, tabId) {

        var popupOptions = {
            width: 1600,
            height: screen.height - 300,
            clickOut: false
        };

        showPopup(pageUrl, 'depositContent', popupOptions, function (dialogOptions) {


            var popupContainer = '<div class="tl_my_acc_cont flex" id="accountDialog">';
            popupContainer += '<div class="tl_my_acc_cont_nav">';

            if ('1093' != '1083') {

                if ('False'.toLowerCase() == 'true') {
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/profilestatic">Account Summary</a>';
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/TransactionsHistory">Transactions</a>';
                }
                else if ('1093' == '1040')
                {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile1093" id="profile_tab">HESABIM</a>';
                }
                else if ('1093' == '1117')
                {
                   popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile1093" id="profile_tab">Kişisel bilgiler</a>';
                }
                else if ('1093' == '2')
                {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile1093" id="profile_tab">Personal information</a>';
                }
                else {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile1093" id="profile_tab">Profilim</a>';
                }
                if ('False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/NotificationSettings" id="notification_tab">Bildirim Ayarları</a>';
                }
                if ('1093' == '1201') {
                    if (0 != 3) {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/DocumentsUpload" id="documents_tab">Identifications</a>';
                    }
                } else if ('True'.toLowerCase() == 'true' || ('1093' == '1129' && 'False' == 'True')) {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/DocumentsUpload" id="documents_tab">Belgeler</a>';
                }

                if (''.length == 0 || '1093' == '1177') {
                    if ('False'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';
                    } else if ('1093' == '1081') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Deposit</a>';
                    } else if ('1093' == '1136' || '1093' == '1180') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Deposit</a>';
                    } else if ('1093' == '1117') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">PARA YATIR</a>';
                    } else if ('1093' == '1129') {
                        if ('False' != 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';
                        }
                    } else if ('1093' == '1004') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Deposit</a>';
                    } else if('1093' == '1174') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">PARA YATIR</a>';
                    } else if ('1093' == '1026') {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatır</a>';
                    }
                    else {
                        popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';
                    }
                    if ('False'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Withdrawal</a>';
                    } else if ('1093' == '2') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                        if ('' != '') {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/' + 'tr' + '/Account/BankAccounts" id="bankAccounts_tab">Bank accounts</a>';
                        }
                    } else if ('1093' == '1094') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Withdraw</a>';
                    }else if ('1093' == '1117') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#231;ek</a>';
                    }
                    else if ('1093' == '1086') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">T&#203;RHEQJE</a>';
                    }
                    else if ('1093' == '1129') {
                        if ('False' != 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                        }
                    } else {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                    }
                }

                if ('False'.toLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Bonuses';
                    if ('0' > 0) {
                        popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                    }
                    popupContainer +='</a >';

                    if ('False'.toLowerCase() == 'true' && 'False'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/ReferAFriend/Invite" id="referAFriend_tab">Refer a Friend</a>';
                    }
                    if ('True'.toLowerCase() == 'true') {
                        popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/Account/InviteFriends">Refer Friends</a>';
                        popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/ReferrerReport">Arkadaş Bonusu Raporu</a>';
                    }
                    if ('False'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GetTrustedBrowsers" id="trustedBrowsers_tab">G&#252;venilen Tarayıcılar</a>';
                    }
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/resetpassword">Change Password</a>';
                    popupContainer += '<a class="diff_tl_my_acc_nav_item" href="/account/gamehistory">Oyun Ge&#231;mişi</a>';
                }

                if ('False'.toLowerCase() != 'true') {
                    if ('1093' == '1086') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">HISTORIA E LOJ&#203;RAVE</a>';
                    }
                    else if ('1093' == '1158') {
                         popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Oyun Ge&#231;mişi</a>';
                    }
                    else {
                        if ('1093' == '1072'){
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Games History</a>';
                        }
                        else if ('1093' != '1201') {
                            if ('1093' == '1130') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Bet History</a>';
                            } else if ('1093' == '1093' || '1093' == '1096') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Bahis Ge&#231;mişi</a>';
                            }else if ('1093' == '1197') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Bahis Ge&#231;mişi</a>';
                            } else if ('1093' != '2') {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Bahis Ge&#231;mişi</a>';
                            }else {
                                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GameHistory" id="history_tab">Game history</a>';
                            }

                        }
                    }
                    if ('1093' == '2') {
                        if ('False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" target="_self" href="' + 'http://grandpashabet1475.com/tr/play/fun/gates-of-grandpashabet-pragmatic-casino' + '#/page/bet-history">Spor Bahis Ge&#231;mişi</a>';
                        } else {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="' + 'https://sport./tr' + '/Sport/SportAccount">Spor Bahis Ge&#231;mişi</a>';
                        }
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TournamentHistory" id="historyTournament_tab">Turnuva Ge&#231;mişi</a>';
                    }
                    else {
                        if ('1093' == '1040') {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">BAHİS GE&#199;MİŞİ</a>';
                        }
                        else if ('1093' == '1075' || '1093' == '1195' || '1093' == '1199') {
                            if ('False' == 'True' || sessionStorage.getItem("SportView") == "africanView") {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/africanview/?page=BetsHistory">BAHİS GE&#199;MİŞİ</a>';
                            }
                            else if ('False' == 'True' || sessionStorage.getItem("SportView") == "paperview") {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/paperview/?page=BetsHistory">BAHİS GE&#199;MİŞİ</a>';
                            }
                            else if ('False' == 'True') {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="#/page/bet-history">BAHİS GE&#199;MİŞİ</a>';
                            } else if ('False' == 'True' || sessionStorage.getItem("SportView") == "asianView") {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/asianview#/page/bet-history">BAHİS GE&#199;MİŞİ</a>';
                            } else if ('False' == 'True' || sessionStorage.getItem("SportView") == "latinView") {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Spor Bahis Ge&#231;mişi</a>';
                            } else {
                                popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">BAHİS GE&#199;MİŞİ</a>';
                            }
                        }
                        else if ('False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" target="_self" href="#/page/bet-history">Spor Bahis Ge&#231;mişi</a>';
                        } else if ('False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_itemsp" target="_self" href="/Sport/Lsportview/bethistory">Spor Bahis Ge&#231;mişi</a>';
                        } else {
                            if ('1093' != '1101') {
                                if ('1093' == '1117') {
                                    if (sessionStorage.getItem("SportView") == "latinView") {
                                        popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Bahis Ge&#231;mişi</a>';
                                    } else {
                                        popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">Bahis Ge&#231;mişi</a>';
                                    }
                                } else {
                                    if ('1093' == '1072' && 'False' != 'True') {
                                        popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Sport Bet history</a>';
                                    } else if (('1093' == '1178' || '1093' == '1108' || '1093' == '1107' ||
                                        '1093' == '1209' || '1093' == '1210' || '1093' == '1213' ||
                                        '1093' == '1211' || '1093' == '1225') && sessionStorage.getItem("SportView") == "latinView") {
                                        popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/lsportview/bethistory">Spor Bahis Ge&#231;mişi</a>';
                                    } else {
                                        if ('1093' == '1158') {
                                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">SPOR BAHİS GE&#199;MİŞİ</a>';
                                        } else if ('1093' == '1059') {
                                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport#/betHistory">Spor Bahis Ge&#231;mişi</a>';
                                        } else if('1093' != '1188') {
                                            popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">Spor Bahis Ge&#231;mişi</a>';
                                        }

                                    }
                                }
                            }
                        }
                    }


                    if ('1093' == '1171' || '1093' == '1187') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TournamentHistory" id="historyTournament_tab">Turnuva Ge&#231;mişi</a>';
                    }
                    switch ('1093') {
                        case '1':
                        case '112':
                            popupContainer += '<a class="tl_my_acc_nav_itemsp promoted" href="/Sport/TournamentsHistory">Sport Tournament</a>';
                            break;
                        case '105':
                             popupContainer += '<a class="tl_my_acc_nav_itemsp promoted" href="/Sport/TournamentsHistory">Sport Tournament</a>';
                            break;
                    }
                    if ('1093' == '1040') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">BONUS GE&#199;MİŞİ';
                        if ('0' > 0) {
                            popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                        }
                        popupContainer += '</a>';
                    } else if ('1093' == '1117') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Bonuslarım';
                        if ('0' > 0) {
                            popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                        }
                        popupContainer += '</a>';
                    } else if ('1093' == '1182') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Bonuses';
                        if ('0' > 0) {
                            popupContainer += '<span class="alb_bonus_count">' +0+'</span>';
                        }
                        popupContainer += '</a>';
                    }
                    else {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/ClientBonusReport" id="bonuses_tab">Promosyonlar';
                        if ('0' > 0) {
                            popupContainer += '<span class="alb_bonus_count ' +  '' + '">' +0+'</span>';
                        }
                        popupContainer += '</a>';
                    }
                    if ('False'.toLowerCase() == 'true' && 'False'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/ReferAFriend/Invite" id="referAFriend_tab">Refer a Friend</a>';
                    }
                    if ('True'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/ReferrerReport" id = "referrer_tab">Arkadaş Bonusu Raporu</a>';
                    }
                    if ('False'.toLowerCase() == 'true' && 'False'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Agent/Index" id="internalAgent_tab">Agent Sistem Raporu</a>';
                    }
                    if ('1093' == '2') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/PendingWithdrawals?typeTransac=2" id="transactions_tab">Finansal İşlemler</a>';
                    } else {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TransactionsHistory?typeTransac=2" id="transactions_tab">Finansal İşlemler</a>';
                    }

                    if ('True'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Account/OpenTwoFaSettings" id="twoFaSettings_tab">2 Aşamalı G&#252;venlik</a>';
                    }
                    if ('False'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GetTrustedBrowsers" id="trustedBrowsers_tab">G&#252;venilen Tarayıcılar</a>';
                    }
                    if ('False'.toLocaleLowerCase() == 'true') {
                        if ('1093' == "1072") {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">Self Limitation</a>';
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming/GetBetWinInfo" id="betwininfo_tab">Responsible Gaming</a>';
                        } else {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">SORUMLU BAHİS</a>';
                        }
                    }

                   if ('True'.toLocaleLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/CheckPromoCode" id="hasPromoDialog">Promo Kodlar</a>';
                    }
                }

                if ('False' == 'True' && 'False' == 'True') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/VoisoCallCenter" id="voisocallcenter_tab">REQUEST A CALL</a>';
                }
                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/MyActivity" id="myActivity_tab">Etkinliğim</a>';

                popupContainer += '</div>';
                popupContainer += '<div class="tl_my_acc_cont_content tl_popup_clr">';
                popupContainer += '<div class="tl_head_close dont-shrink tl_my_acc_close"></div>';
                if ('False'.toLowerCase() != 'true') {
                    popupContainer += '<div id="tl_scroll" class="profile_popup_content scrolled__content">';
                }
                popupContainer += '<div id="tl_profile_content"></div>';
                if ('False'.toLowerCase() == 'true')
                {
                    popupContainer += '</div>';
                }


            } else {

                //Oriontip menu

                popupContainer += '<span class="tl_my_acc_nav_item">PROFILE</span>';

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Profile10931083" id="profile_tab">Personal Details</a>';
                if ('False' == 'True') {
                            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/NotificationSettings" id="notification_tab">Bildirim Ayarları</a>';
                }
                if ('True'.toLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/DocumentsUpload" id="documents_tab">Belgeler</a>';
                }

                if ('False'.toLocaleLowerCase() == 'true') {
                    if ('1093' == "1083") {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">Self Limitation</a>';
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming/GetBetWinInfo" id="betwininfo_tab">SORUMLU BAHİS</a>';
                    } else {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming" id="responsibleGamingDialog">SORUMLU BAHİS</a>';
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/ResponsibleGaming/GetBetWinInfo" id="betwininfo_tab">Information on Bets</a>';
                    }

                }

                popupContainer += '<span class="tl_my_acc_nav_item">My Wallet</span>';

                popupContainer += '<a class="tl_my_acc_nav_item ' + '' + '" data-href="/tr/Account/Deposit" id="deposit_tab">Para Yatırma</a>';


                if (''.length == 0) {
                    if ('1093' == '1094') {
                         popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Withdraw</a>';
                    } else {
                         popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/Withdrawal" id="withdraw_tab">Para &#199;ekme</a>';
                    }
                 }

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/TransactionsHistory?typeTransac=2" id="transactions_tab">Finansal İşlemler</a>';

                popupContainer += '<span class="tl_my_acc_nav_item">MY BETS</span>';

                if ('False' == 'True') {
                    popupContainer += '<a class="tl_my_acc_nav_itemsp" target="_self" href="#/page/bet-history">Spor Bahis Ge&#231;mişi</a>';
                }
                else {
                   popupContainer += '<a class="tl_my_acc_nav_itemsp" href="/Sport/SportAccount">Spor Bahis Ge&#231;mişi</a>';

                }

                if ('True'.toLocaleLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Account/OpenTwoFaSettings" id="twoFaSettings_tab">2 Aşamalı G&#252;venlik</a>';
                }
                if ('False'.toLocaleLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GetTrustedBrowsers" id="trustedBrowsers_tab">G&#252;venilen Tarayıcılar</a>';
                }
                popupContainer += '<span class="tl_my_acc_nav_item">Bonuslar</span>';

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/NewBonuses?scope=0" id="bonuses_tab">New Bonuses</a>';

                popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Bonus/NewBonusHistory?showHistory=True&amp;scope=0" id="bonuses_all_tab">Bonuses History</a>';
                if ('False'.toLowerCase() == 'true' && 'False'.toLowerCase() == 'true') {
                        popupContainer += '<a class="tl_my_acc_nav_item" data-href="/ReferAFriend/Invite" id="referAFriend_tab">Refer a Friend</a>';
                }
                if ('True'.toLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/ReferrerReport" id = "referrer_tab">Arkadaş Bonusu Raporu</a>';
                }
                if ('False'.toLowerCase() == 'true' && 'False'.toLocaleLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/Agent/Index" id="internalAgent_tab">Agent Sistem Raporu</a>';
                }
                if ('False' == 'True') {
                    popupContainer +=
                            '<a class="tl_my_acc_nav_item" data-href="/tr/Account/VoisoCallCenter" id="voisocallcenter_tab">REQUEST A CALL</a>';
                }
                if ('True'.toLocaleLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/CheckPromoCode" id="hasPromoDialog">Promo Kodlar</a>';
                }
                if ('False'.toLocaleLowerCase() == 'true') {
                    popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/GetTrustedBrowsers" id="trustedBrowsers_tab">G&#252;venilen Tarayıcılar</a>';
                }
            popupContainer += '<a class="tl_my_acc_nav_item" data-href="/tr/Account/MyActivity" id="myActivity_tab">Etkinliğim</a>';
            popupContainer += '</div>';
            popupContainer += '<div class="tl_my_acc_cont_content tl_popup_clr">';
            popupContainer += '<div class="tl_head_close dont-shrink tl_my_acc_close"></div>';
                popupContainer += '<div id="tl_scroll"  class="profile_popup_content scrolled__content">';
            popupContainer += '<div id="tl_profile_content"></div></div';

            }

            popupContainer += '</div>';
            popupContainer += '</div>';

            dialogOptions.open = function() {
                $('#tl_profile_content').load(pageUrl, function (data) {

                    // check if is user is not logged, redirect
                    if (!isLogged(data)) {
                        location.href = "/";
                        return false;
                    }

                    // set active tab
                    activateTab(tabId);

                    // hide spiiner
                    hideSpinner();

                    changeAccountPopupHeight(tabId);
                });
            };
            $(popupContainer).appendTo("body").dialog(dialogOptions);
        });
       showpopup = false;
    }

    function showPopup(pageUrl, containerId, popupOptions, callback) {
        var passChangeRequired = 'false';
        if (passChangeRequired == 'true' && containerId != 'forceChangePassContent') {
            showPopup('/Account/ForceChangePassword', 'forceChangePassContent', {
                width: 335,
                height: 'auto'
            });
            return;
        }
        if ('False'.toLocaleLowerCase() == 'false') {
            $('body').addClass('ofh');
        }
        $(window).scrollTop(0);
        callback = callback || false;

        // setting options
        var options = popupOptions || {};

        // setting dialog options
        var dialogOptions = {

            clickOut: false,
            showTitleBar: false,
            showCloseButton: false,
            responsive: true,
            dialogClass: "tl_popup_dialog",
            modal: true,
            draggable: false,
            resizable: false,
            closeOnEscape:true,
            show: {
                effect: "fadeIn",
                duration: 300
            },
            hide: {
                effect: "fadeOut",
                duration: 300
            },
            position: {},
            open: function(e, ui) {
                $(this).load(pageUrl, function() {
                    hideSpinner();
                });
            },
            close: function() {
                $(this).remove();
                if (!$('body').hasClass('no_scroll')) {
                    $('body').removeClass('ofh');
                }
                $('body').removeClass('bodyscroll');
                if ('False'.toLowerCase() == 'true')
                {
                    if (containerId == "inboxContent") {
                        var url = window.location.href;
                        if (url.includes('/?account=1')) {
                            url = url.replace('/?account=1', '');
                            window.location.href = url;
                        }
                    }
                }

            }
        };

        dialogOptions = $.extend(dialogOptions, options);

        if (containerId == 'forceChangePassContent' || containerId == 'selfExclusionContent' || containerId == 'changeLoginPassContent') {
            dialogOptions = $.extend(dialogOptions, { closeOnEscape:false});
        }

        showSpinner();

        if (!callback) {
            $('<div />', {
                    id: containerId,
                    class: 'dialog'
                })
                .appendTo("body").dialog(dialogOptions);
        } else {
            callback(dialogOptions);
        }
        if (dialogOptions.position == null) {
            $('.js_popup_dialog').removeAttr('style');
            $('#registerContent').removeAttr('style');
            $('#loginContent').removeAttr('style');
        }
    }

    $(document).on("click", ".tl_head_close", function (e) {
        e.preventDefault();
        $(this).closest(".ui-dialog-content").dialog("close");
        click = 0;
        showpopup = true;
    });

    $(document).on('keyup', function(e) {
          if (e.key == "Escape") showpopup = true;
    });


    $(document).on("click", ".tl_my_acc_nav_itemsp", function (e) {
        $(this).closest(".ui-dialog-content").dialog("close");
        click = 0;
    });
    /*Popups End*/

    jQuery(document).on('keyup', function (evt) {
        if (evt.keyCode == 27) {
            click = 0;
        }
    });

    /*Spinner Start*/
    function showSpinner() {
        $('#tl_loader').removeClass('hidden');
    }

    function hideSpinner() {
        $('#tl_loader').addClass('hidden');
    }
    /*Spinner End*/

    /* Check Checkboxes Start */
    function chkBoxFunc(id) {

        if ($(id).is(':checked')) {
            $(id).val('true');
        } else {
            $(id).val('false');
        }
    }
    /* Check Checkboxes End */

    /* Clock Start */

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function checkTimeZone2(z) {
        return "GMT" + (z > 0 ? "-" + z : "+" + z * -1);
    }

    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var z = today.getTimezoneOffset() / 60;

        // add a zero in front of numbers<10
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        $('.time').html(h + ":" + m + ":" + s);

        z = checkTimeZone2(z);
        $('.zone').html(z);

        t = setTimeout(function () {
            startTime();

            if ('tr' == 'fa' && 'False'.toLowerCase() == 'true')
               {
                String.prototype.toPersianDigit = function (a) {

                    if (this == $(".time").text()) {
                        return this.replace(/\d+/g,
                            function(digit) {
                                var enDigitArr = [], peDigitArr = [];
                                for (var i = 0; i < digit.length; i++) {
                                    enDigitArr.push(digit.charCodeAt(i));
                                }
                                for (var j = 0; j < enDigitArr.length; j++) {
                                    peDigitArr.push(
                                        String.fromCharCode(enDigitArr[j] + ((!!a && a == true) ? 1584 : 1728)));
                                }
                                return peDigitArr.join('');
                            });
                    } else {
                        return this;
                    }



                };

                function TraceNodes(Node) {
                    if (Node.nodeType == 3)  //TextNode
                        Node.nodeValue = Node.nodeValue.toPersianDigit();
                    else
                        for (var i = 0; i < Node.childNodes.length; i++)
                            TraceNodes(Node.childNodes[i]);
                }

                TraceNodes(document.getElementById("myTime"));
            }

        }, 500);
    }

    /* Clock End */

    /*On Escape close select menus */
    $(document).keyup(function(e) {
        if (e.keyCode === 27) {
            $(this).customSelect({
                method: 'closeList'
            });
        }
    });

    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    /*Dynamic Payments*/
    function showDynLoading(event) {
        $(event).hide();
        $($(event).parent().next()).show();
    }

    function hideDynLoading(event) {
        $($(event).parent().next()).hide();
        $(event).show();
    }

    function validateDDControl(el) {
        var elP = $(el).parent() ? $(el).parent()[0] : el;
        var inpValErr = "input-validation-error";
        var isVal = true;
        if (!el.value && elP.classList.toString().indexOf(inpValErr) === -1) {
            elP.classList.add(inpValErr);
            var ps = document.createElement('span');
            ps.className = "reg_err_mess field-validation-error";
            var ns = document.createElement('span');
            ns.innerHTML = el.getAttribute("data-val-required");
            ps.appendChild(ns);
            $(elP).parent()[0].appendChild(ps);
            isVal = false;
        } else if (elP.classList.toString().indexOf(inpValErr) !== -1 && el.value) {
            elP.classList.remove(inpValErr);
            var remEl = $(elP).parent()[0].getElementsByClassName("field-validation-error");
            if (remEl && remEl[0]) {
                $(remEl[0]).parent()[0].removeChild(remEl[0]);
            }
            isVal = true;
        } else if (!el.value && elP.classList.toString().indexOf(inpValErr) !== -1) {
            var e = $(elP).next();
            if (e && e[0]) {
                e[0].innerHTML = '<span>' + el.getAttribute("data-val-required") + '</span>';
                isVal = false;
            }
        }
        return isVal;
    }

    function validateDynamicForm(el) {
        var patt = new RegExp(el.getAttribute("data-val-regex-pattern"));
        var inpValErr = "input-validation-error";
        var parentEl = $(el).parent()[0];
        var test = patt.test(el.value);
        var minL = el.getAttribute("minlength");
        if (el.value.length === 0 || el.value.length >= parseInt(minL)) {
            el.classList.remove(inpValErr);
            var nxt = $(el).next();
            if (nxt && nxt[0]) {
                parentEl.removeChild($(el).next()[0]);
            }
        }

        if ((!test || !el.value) && el.classList.toString().indexOf(inpValErr) === -1) {
            el.classList.add(inpValErr);
            var ps = document.createElement('span');
            ps.className = "reg_err_mess field-validation-error";
            var ns = document.createElement('span');
            ns.innerHTML = !el.value ? el.getAttribute("data-val-required") : el.getAttribute("data-val-regex");
            ps.appendChild(ns);
            parentEl.appendChild(ps);
        } else if (el.classList.toString().indexOf(inpValErr) !== -1 && test) {
            el.classList.remove(inpValErr);
            var remEl = parentEl.getElementsByClassName("field-validation-error");
            if (remEl && remEl[0]) {
                parentEl.removeChild(remEl[0]);
            }
        } else if ((!test || !el.value) && el.classList.toString().indexOf(inpValErr) !== -1) {
            var e = $(el).next();
            if (e && e[0]) {
                e[0].innerHTML = '<span>' + (!el.value ? el.getAttribute("data-val-required") : el.getAttribute("data-val-regex")) + '</span>';
            }
        }
    }

    /*End Dynamic Payments*/

    $(document).on('click', '.openLogin',
        function() {
            LoginTrigger();
            return false;
        });


    $(document).on('click', '.openRegistration',
        function () {
            RegisterTrigger();
            return false;
        });

</script>
<script type="text/javascript">
    BalanceUpdater.PlayerId = 0;
    BalanceUpdater.start();
</script>










































    <style>

        .tl_loader {
            background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/loader.gif') !important;
        }
    </style>

<script>
    function getNewBonusHistory(showHistory) {
        let allowNewBonusHistoryClick = true;

        if (allowNewBonusHistoryClick) {
            allowNewBonusHistoryClick = false;
            $.ajax({
                url: "/tr/Bonus/NewBonusHistory",
                type: "POST",
                data: "showHistory=" + showHistory,
                datatype: "json",
                success: function (result) {
                    // check if is user is not logged, redirect
                    if (!isLogged(result)) {
                        location.href = "/";
                        return false;
                    }

                    $("#tl_profile_content").html(result);
                    allowNewBonusHistoryClick = true;
                }
            });
        }
    }
</script>

</head>
<body>





<head>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-P7VH6V5');</script>
        <!-- End Google Tag Manager -->
</head>
<body>

        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7VH6V5" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

    <header class="lca-gv-header lca-wrapper" id="js_gv_header">
        <div class="lca-gv-header-left d-flex justify-content-between align-items-center">
                    <a href="/tr/Lobby/Casino/Main" class="header__left__logo header__left__logo_lg" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/logo.png')"></a>
                    <a href="/tr/Lobby/Casino/Main" class="header__left__logo header__left__logo_sm" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/logoSm.png')"></a>

            <button class="lca-gv-header-btn" id="js_header_btn"></button>
        </div>
        <div class="lca-gv-header-right flex-grow-1 d-flex justify-content-between">
            <div class="tl_login_container d-flex">
                    <div class="tl_logged_out flex">
                                <a class="registerDialog tl_btn h-bg-primary tl_space_h" automation="open_register" data-dialog-title="New User" data-href="/Registration/Register">&#220;YE OL</a>
                                                    <a class="loginDialog tl_btn tl_space_h" data-dialog-title="Login" data-href="/Login/Login" automation="home_login_button">&#220;YE GİRİŞİ</a>
                    </div>
            </div>
        </div>
    </header>

    <script>
        /*for skinner*/
        window.parent.postMessage({ cssText: '', sender: 'updateCss' }, '*');

        window.addEventListener('message', (event) => {

            if (event.data.sender !== 'skinner') return;

            var cssText = event.data.cssText;

            if (!cssText) return console.log('no css text found');

            createOrUpdateStyle(cssText);
        });

        var skinnerGeneratedStyleID = 'skinner-generated-style';

        function createOrUpdateStyle(cssText) {
            var existingStyle = document.getElementById(skinnerGeneratedStyleID);

            if (existingStyle) return existingStyle.innerHTML = cssText;

            var options = { innerHTML: cssText, id: skinnerGeneratedStyleID };

            var style = createStyle(options);

            document.head.appendChild(style);
        }

        function createStyle(options) {
            options = options || {};
            var style = document.createElement('style');
            Object.assign(style, options);
            return style;
        }


    </script>
</body>
    <div class="lca-gv d-flex lca-wrapper" id="js_gv">
            <div class="lca-gv-background" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/Background/Pragmatic/GatesofGrandpashabet.webp')" id="js_backgr_image"></div>
        <div class="lca-gv-sidebar" id="js_gv_sidebar">
        </div>
        <div class="lca-gv-main open " id="js_gv_main">
            <div class="lca-gv-container" id="js_game_view_cont">
                <div class="lca-gv-container-item one-item js_game_view_item" data-has-game="true" data-game-id="34649" data-href="Gates-of-Grandpashabet-Pragmatic"
                     data-advancedview="false" data-game-name="Gates of Grandpashabet">
                    <div class="lca-gv-game-card js_game_view_item_inner">
                        <div class="lca-gv-game-btn-block d-flex justify-content-between align-items-center">
                            <h3 class="lca-gv-game-title">Gates of Grandpashabet</h3>
                            <div class="lca-gv-game-btns d-flex align-items-center">
                                <span class="hand_icon js_mv_game_like " title="Beğen"><span class="like-count js_game_likes_count">3794</span></span>
                                <span class="star_icon js_mv_game_fav " title="Favorilere ekle"></span>
                                <span class="sync_icon js_reload_game" title="Yenile"></span>
                                <span class="fullscreen_icon js_to_full_screen" title="Tam ekran"></span>
                                <span class="copy_icon js_to_new_window" title="Yeni pencerede a&#231;"></span>
                                <span class="close_icon js_gv_close" title="Kapat"></span>
                            </div>
                        </div>
                            <iframe src="https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?lang=tr&amp;cur=TRY&amp;gameSymbol=vs20grandpasha" allowFullScreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

<script src="/assets/bundles/DLMultiView.js?v=hjSpylIaqKzGCHN0q9gpfcuzJC8jeaCx2-DMdSgcCfg1"></script>

<script type="text/javascript">
    var data = {
        language: 'tr',
        userId: '0',
        trns: {
            DyLobbyGames: 'Casino Games',
            NoSearchResults: 'Sonu&#231; Bulunamadı',
            AddGame: 'OYUN EKLE',
            GoBack: 'Geri git',
            Open: 'A&#231;',
            ToOpenInNewWindow: 'Oyunu yeni pencerede a&#231;manız durumunda a&#231;ık olan oyun durdurulacaktır',
            ToAddGame: 'Yeni oyun ekleyebilmek i&#231;in l&#252;tfen a&#231;ık durumda olan oyunlardan birini kapatın',
            ToSwitchGameMode: 'Bu modu se&#231;ebilmek i&#231;in l&#252;tfen yeterli sayıda oyunu kapatın',
            Close: 'Kapat',
            OpenInNewWindow: 'Yeni pencerede a&#231;',
            FullScreen: 'Tam ekran',
            Like: 'Beğen',
            AddToFavorites: 'Favorilere ekle',
            Reload: 'Yenile',
            UseLatinLettersInSearch: 'Sadece harf veya rakam kullanarak arama yapınız.',
            YouHaveNoFavoriteGames: 'Hen&#252;z herhangi bir oyunu favorilerinize eklemediniz.',
            NoSuchGameFound: 'Oyun bulunamadı',
            YouHaveNoLastPlayedGames: 'You have no last played games yet.',
        },
        lobbyName: 'casino',
        lobbyUrl: 'Casino',
        cdnUrl: 'https://cdn-plat.apidigi.com/plat/prd/',
        RmCdnUrl: 'https://cdn-plat.apidigi.com/plat/prd/',
        languageDirection: typeof rtlLng != 'undefined' ? "rtl" : 'ltr',
        currencyCode: 'try',
        isRealMode: 'false',
        allowChangeHeight: true,
        favoriteGroupType: '2',
        partnerName: 'GrandPashaBet',
        partnerId: '1093',
        hasStaticLoginPage: JSON.parse('false'),
        showGamesCount: JSON.parse('false'),
        lastPlayedGroupType:'7',
        referrerUrl: '/tr/Lobby/Casino/Main',
        homeUrl: '/',
        gameName: 'Gates of Grandpashabet',
    };
    DyLobbyMultiView.init(data);
</script>
