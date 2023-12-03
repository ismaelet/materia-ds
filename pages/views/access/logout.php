{% block form-body %}

<p class="pad-v-1 txt-1rem"><?= __('Are you sure you want to leave?') ?></p>

{% end form-body %}

{% block form-footer %}

<button type="submit" name="submit" class="pbtn">Logout</button>
<a href="<?= html_link() ?>" class="sbtn"><?= __('Back') ?></a>

{% end form-footer %}