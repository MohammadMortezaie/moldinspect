<?php
declare(strict_types=1);

$formId = $formId ?? '';
$formClass = $formClass ?? 'contact-card contact-form';
$formTitle = $formTitle ?? '';
$formButton = $formButton ?? 'Request Inspection';
$messagePlaceholder = $messagePlaceholder ?? 'Tell us what you found, where it is, and how urgent it feels.';
$uniqueId = preg_replace('/[^A-Za-z0-9_-]/', '', $formId !== '' ? $formId : uniqid('contactForm', false));
$idPrefix = $uniqueId . '-';
?>
<form<?= $formId !== '' ? ' id="' . e($formId) . '"' : '' ?> class="<?= e($formClass) ?>" action="/contact-submit/" method="post">
  <?php if ($formTitle !== ''): ?>
    <h2 class="h4 mb-3"><?= e($formTitle) ?></h2>
  <?php endif; ?>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label" for="<?= e($idPrefix) ?>name">Full Name</label>
      <input class="form-control" id="<?= e($idPrefix) ?>name" name="name" autocomplete="name" required>
    </div>
    <div class="col-md-6">
      <label class="form-label" for="<?= e($idPrefix) ?>email">Email</label>
      <input class="form-control" id="<?= e($idPrefix) ?>email" name="email" type="email" autocomplete="email" required>
    </div>
    <div class="col-md-6">
      <label class="form-label" for="<?= e($idPrefix) ?>phone">Phone Number</label>
      <input class="form-control" id="<?= e($idPrefix) ?>phone" name="phone" type="tel" autocomplete="tel" required>
    </div>
    <div class="col-12">
      <label class="form-label" for="<?= e($idPrefix) ?>message">Message</label>
      <textarea class="form-control" id="<?= e($idPrefix) ?>message" name="message" rows="5" placeholder="<?= e($messagePlaceholder) ?>" required></textarea>
    </div>
    <div class="col-12">
      <button class="btn btn-primary-custom w-100" type="submit"><?= e($formButton) ?></button>
    </div>
  </div>
</form>
<?php
unset($formId, $formClass, $formTitle, $formButton, $messagePlaceholder, $uniqueId, $idPrefix);
?>
