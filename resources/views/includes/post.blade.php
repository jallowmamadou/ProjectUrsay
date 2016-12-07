              <div style="padding: 8px 0px">
                  <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col">
                      <div class="mdl-card__supporting-text flexed" style="margin: 40px 40px 0;">
                        <a href="#" class="post-avatar">
                          <img src="{{$user->avatar}}" alt="{{$user->name}}" width="55" height="55" class="avatar">
                          <h3 class="posted__by-text">{{$user->name}}</h3>
                        </a>
                        <form action="#" class="mdl-cell mdl-cell--12-col">
                          <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
                            <textarea class="mdl-textfield__input" type="text" rows= "3" maxrows="6" id="feedpost" ></textarea>
                            <label class="mdl-textfield__label" for="feedpost">What are you thinking...</label>
                          </div>
                        </form>
                      </div>
                      <div class="mdl-card__actions flexed" style="border: 0">
                      <!-- Add spacer, to align navigation to the right -->
                      <div class="mdl-layout-spacer"></div>
                        <!-- Colored icon button -->
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Publish
                        </button>
                      </div>
                    </div>
                  </section>
              </div>


              {{-- Post Card --}}
                <div class="mdl-layout__tab-panel is-active" id="feed" style="margin: 0 0 16px;">
                  <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col" style="border-bottom: 1px solid rgba(0, 0, 0, 0.12);">
                      <div class="mdl-card__supporting-text flexed">
                        <a href="#" class="post-avatar">
                          <img src="https://assets.materialup.com/uploads/65f40866-ec7f-4f83-adfa-965f19db92a7/avatar.jpg" alt="Chris" width="55" height="55" class="avatar">
                          <h3 class="posted__by-text">Amiga tepasaleh <span class="posted_at">3 min</span></h3>
                        </a>
                        <p class="post-text">Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse. Pariatur occaecat nisi laboris tempor laboris eiusmod qui id Lorem esse commodo in. Exercitation aute dolore deserunt culpa consequat elit labore incididunt elit anim.</p>
                      </div>
                      <div class="mdl-card__actions" style="border: 0;">
                        <!-- Colored icon button -->
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                          <i class="material-icons">thumb_up</i>
                        </button>
                        <!-- Colored icon button -->
                        <button class="mdl-button mdl-js-button mdl-button--icon">
                          <i class="material-icons">thumb_down</i>
                        </button>
                      </div>
                    </div>
                  </section>
              </div>
                