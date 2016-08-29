  <!-- Search bar -->
    <div class="section">
        <nav>
          <div class="nav-wrapper {{$colors['mainColorClass'] or '' }} {{$colors['secondFontColorClass'] or ''}} accent-2">
            <form>
              <div class="input-field">
                <input id="search" type="search" required >
                <label for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
     </div>

     <div class="section">
        <div class="row">
          <div class="col s12 m12">
            <div class="card-panel transparent">
              <span class="text-grey text-darken-3"> Busca nuestros productos más vendidos por categoría.
              </span>
            </div>
          </div>

          <div class="col s12 m12">
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_drama</i>Categoría 1</div>
                  <div class="collapsible-body"><p>Categoría 1</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">place</i>Categoría 2</div>
                  <div class="collapsible-body"><p>Categoría 2</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Categoría 3</div>
                  <div class="collapsible-body"><p>Categoría 3</p></div>
                </li>
              </ul>
          </div>
        </div>
     </div>