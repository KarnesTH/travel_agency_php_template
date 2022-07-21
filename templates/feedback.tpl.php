    <main class="content">
      <div class="fullwidth-block">
        <div class="container">
          <form class="row p-3 x-gap">
            <fieldset class="col-12 col-lg-4 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Persönliche Daten</legend>
              <div class="form-group row">
                <div class="form-check col-lg-3 offset-lg-2 pl-5 pl-lg-0">
                  <input class="form-check-input" type="radio" name="geschlecht" id="frau" value="frau" required>
                  <label class="form-check-label" for="frau">
                    Frau
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="radio" name="geschlecht" id="herr" value="herr" required>
                  <label class="form-check-label" for="herr">
                    Herr
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="radio" name="geschlecht" id="divers" value="divers" required>
                  <label class="form-check-label" for="divers">
                    Divers
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="vorname">Vorname</label>
                <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Bitte Vorname eingeben"
                  required>
              </div>
              <div class="form-group">
                <label for="name">Nachname</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Bitte Nachname eingeben"
                  required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Wir behandeln Ihre Daten vertraulich,
                  versprochen!</small>
              </div>
            </fieldset>


            <fieldset class="col-12 col-lg-8 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Nachricht</legend>
              <div class="form-group">
                <label for="betreff">Ihr Anliegen:</label>
                <select name="betreff" id="betreff" size="1" class="form-control">
                  <option value="btr1">Frage zur Reise</option>
                  <option value="btr2">Frage zu Angebot</option>
                  <option value="btr3">Frage zum Newsletter Reise</option>
                  <option value="btr4">Frage zum Newsletter Reisebüro</option>
                  <option value="btr5">Frage zum Gewinnspiel</option>
                  <option value="btr6">Sonstiges/Feedback</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nachricht">Ihre Nachricht:</label>
                <textarea name="nachricht" id="nachricht" rows="8" class="form-control"></textarea>
              </div>

            </fieldset>
            <fieldset class="col-12 col-lg-6 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Newsletter</legend>
              <div class="form-group row">
                <div class="form-check col-lg-3 offset-lg-2 pl-5 pl-lg-0">
                  <input class="form-check-input" type="checkbox" name="nl_reise" id="nl_reise" value="nl_reise">
                  <label class="form-check-label" for="nl_reise">
                    Reise
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="checkbox" name="nl_buero" id="nl_buero" value="nl_buero">
                  <label class="form-check-label" for="nl_buero">
                    Reisebüro
                  </label>
                </div>
                <div class="form-check col-lg-3 pl-5 pl-lg-0">
                  <input class="form-check-input" type="checkbox" name="nl_gewinn" id="nl_gewinn" value="nl_gewinn">
                  <label class="form-check-label" for="nl_gewinn">
                    Gewinnspiel
                  </label>
                </div>
              </div>
            </fieldset>

            <fieldset class="col-12 col-lg-6 mb-2">
              <legend class="d-inline-block w-auto px-2 rounded bg-success text-white">Aktion</legend>
              <button type="submit" class="btn btn-tplcolor">Submit</button>
              <button type="reset" class="btn btn-light">Reset</button>
            </fieldset>

          </form>
        </div>
      </div>
    </main>
