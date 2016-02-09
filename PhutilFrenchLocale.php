<?php

/**
 * French locale
 */
final class PhutilFrenchLocale extends PhutilLocale {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  public function getLocaleName() {
    return pht('Français (France)');
  }

  public function getFallbackLocaleCode() {
    return 'en_US';
  }
}

