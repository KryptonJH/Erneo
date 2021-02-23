<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i id="icon" class="fas fa-bars navTrigger"></i>
    </label>
    <label class="logo">
        <a class="<?= ($loc == '') ? 'active' : ''; ?>" href="<?= BASE_URL ?>" id="logo">
            <img src="<?= PATH_IMG ?>/unnamed.png" class="logo-erneo" >
        </a>
    </label>
    <ul>
        <li class="on <?= ($loc == 'studies') ? 'active' : ''; ?>">
            <a href="<?= BASE_URL ?>studies">Études</a>
            <span class="line-bottom"></span>
        </li>
        <li class="on <?= ($loc == 'productions') ? 'active' : ''; ?>">
            <a href="<?= BASE_URL ?>productions">Fabrications</a>
            <span class="line-bottom"></span>
        </li>
        <li class="on <?= ($loc == 'trials') ? 'active' : ''; ?>">
            <a href="<?= BASE_URL ?>trials">Essais</a>
            <span class="line-bottom"></span>
        </li>
        <li class="on <?= ($loc == 'skill') ? 'active' : ''; ?>">
            <a href="<?= BASE_URL ?>skill">Savoir-Faire</a>
            <span class="line-bottom"></span>
        </li>
        <li class="on <?= ($loc == 'products') ? 'active' : ''; ?>">
            <a href="<?= BASE_URL ?>products">Produits</a>
            <span class="line-bottom"></span>
        </li>
        <li class="on <?= ($loc == 'realisations') ? 'active' : ''; ?>">
            <a href="<?= BASE_URL ?>realisations">Réalisations</a>
            <span class="line-bottom"></span>
        </li>
        <li class="on <?= ($loc == 'contact') ? 'active' : ''; ?>">
            <a href="<?= BASE_URL ?>contact">Contact</a>
            <span class="line-bottom"></span>
        </li>
    </ul>
</nav>