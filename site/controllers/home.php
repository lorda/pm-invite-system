<?php

return function($site, $pages, $page) {

  $allInvites = db::select('user', '*');
  $enabledInvites = db::select('user', '*', array('ud' => '1'));
  $disabledInvites = db::select('user', '*', array('ud' => '0'));

  $countAllInvites = count($allInvites);
  $countEnabledInvites = count($enabledInvites);
  $countDisabledInvites = count($disabledInvites);

  if( get('submit') ) {

    if ( get('message') == '' ) {
      echo("ERREUR");
    } else {

      foreach ($enabledInvites as $enabledInvite) {

        if ( $enabledInvite->phn() != "" ) {
          sendSMS('+1' . $enabledInvite->phn(), get('message'));
        }

      }
    }
  }

  return compact('allInvites', 'enabledInvites', 'disabledInvites', 'countAllInvites', 'countEnabledInvites', 'countDisabledInvites');

};
