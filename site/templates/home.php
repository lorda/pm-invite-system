<?php snippet('header') ?>

  <main>

    <div class="container">

      <div class="row">

        <div class="col-md-4">

          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#tableau">Invitations</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#send">Envoyer un message</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#codes">Gestion des invitations</a>
          </div>

        </div>

        <div class="col-md-7 offset-md-1">

          <div class="tab-content">

            <div class="tab-pane fade" id="send">

              <h2>Envoyer un message</h2>
              <p>Envois un SMS à toutes les personnes ayant activé leur code.</p>

              <form method="post">

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="4" required placeholder="Tapez votre message ici..."></textarea>
                </div>

                <div class="alert alert-warning" role="alert">
                  Ne pas appuyer plusieurs fois sur envoyer!
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Envoyer le message">

              </form>

            </div>

            <div class="tab-pane fade" id="codes">

              <h2>Ajouter des codes</h2>
              <p>Permet d'ajouter des codes d'invitation.</p>

              <!-- <form method="post">

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="4" required placeholder="Tapez votre message ici..."></textarea>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="SEND!!">

              </form> -->

            </div>

            <div class="tab-pane fade" id="codes">

              <h2>Ajouter des codes</h2>
              <p>Permet d'ajouter des codes d'invitation.</p>

              <form method="post">

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="4" required placeholder="Tapez votre message ici..."></textarea>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="SEND!!">

              </form>

            </div>

            <div class="tab-pane fade show active" id="tableau">

              <h2>Invitations</h2>

              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" data-toggle="tab" href="#allInvite">Tous <span class="badge badge-dark"><?= $countAllInvites ?></span></a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#enabledInvite">Activées <span class="badge badge-success"><?= $countEnabledInvites ?></span></a>
                  <a class="nav-item nav-link" data-toggle="tab" href="#disabledInvite">Non activées <span class="badge badge-warning"><?= $countDisabledInvites ?></span></a>
                </div>
              </nav>

              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="allInvite">

                  <table class="table">
                    <caption>Affiche les codes activés seulement</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Code</th>
                        <th scope="col">Activé?</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $i = 0; ?>
                      <?php foreach($allInvites as $allInvite): ?>
                      <?php $i++; ?>

                      <tr>
                        <td><?= $i ?></td>
                        <td><?= html($allInvite->phn()) ?></td>
                        <td><?= html($allInvite->psw()) ?></td>
                        <td><?= e(html($allInvite->ud()) == '1', '<span class="badge badge-success">Oui</span>', '<span class="badge badge-danger">Non</span>')  ?></td>
                      </tr>

                      <?php endforeach ?>

                    </tbody>
                  </table>

                </div>
                <div class="tab-pane fade" id="enabledInvite">

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Code</th>
                        <th scope="col">Activé?</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $i = 0; ?>
                      <?php foreach($enabledInvites as $enabledInvite): ?>
                      <?php $i++; ?>

                      <tr>
                        <td><?= $i ?></td>
                        <td><?= html($enabledInvite->phn()) ?></td>
                        <td><?= html($enabledInvite->psw()) ?></td>
                        <td><?= e(html($allInvite->ud()) == '1', '<span class="badge badge-success">Oui</span>', '<span class="badge badge-danger">Non</span>')  ?></td>
                      </tr>

                      <?php endforeach ?>

                    </tbody>
                  </table>

                </div>
                <div class="tab-pane fade" id="disabledInvite">

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Code</th>
                        <th scope="col">Activé?</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $i = 0; ?>
                      <?php foreach($disabledInvites as $disabledInvite): ?>
                      <?php $i++; ?>

                      <tr>
                        <td><?= $i ?></td>
                        <td><?= html($disabledInvite->phn()) ?></td>
                        <td><?= html($disabledInvite->psw()) ?></td>
                        <td><?= e(html($disabledInvite->ud()) == '1', '<span class="badge badge-success">Oui</span>', '<span class="badge badge-danger">Non</span>')  ?></td>
                      </tr>

                      <?php endforeach ?>

                    </tbody>
                  </table>

                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>

<?php snippet('footer') ?>
