<main class="main-article">
    <section class="article">
        <div class="upward" title="Haut de page"><a href="#header">🡩</a></div>
        <h1>Bootstrap</h1>
        <time>23 décembre 2022</time>

        <p>Veille sur Bootstrap, le fameux framework pour développer en frontend, très utile fut un temps mais dont l'utilisation est de plus en plus controversée..</p>
        <hr>
        <div class="article">

            <div class="img-bootstrap"><img src="assets/bootstrap.png" alt="Logo de Bootstrap"></div>
            <dl>
                <dt>Qu'est-ce que Bootstrap ? </dt>
                <dd>
                    <p>
                        Pour parler de Bootstrap, on doit d’abord savoir et définir ce qu’est un framework. Ce terme signifie littéralement charpente, structure, et par extension en informatique on parle d’environnement ou d’infrastructure de développement. Wikipédia, pour définir Bootstrap, utilise l’expression collection d’outils qui renvoie à la page framework.
                    </p>
                    <p><i>Qu’est-ce qu’un framework ?</i></p>
                    <p>C’est un ensemble cohérent de composants logiciels structurels qui sert à créer les fondations ainsi que les grandes lignes de tout ou partie d’un logiciel, c’est-à-dire d’une architecture. Un framework est moins spécialisé qu’une bibliothèque logicielle et il peut d’ailleurs en contenir. Dans notre cas, Bootstrap sert à coder de l’HTML, du CSS (en Sass également) et du JavaScript, donc à faire du développement frontend.</p>
                    <p>Bootstrap en tant que framework contient donc des ensembles de morceaux de code HTML, CSS/Sass ou JavaScript qui vont nous servir pour développer.</p>
                    <p>A noter qu’un framework ne possède pas d’interface, il se distingue en ce sens d’une plateforme.</p>
                    <p><i>Résumé : Bootstrap = framework = collection d’outils pour développer du frontend.</i></p>
                </dd>
            </dl>
            <dl>
                <dt>Historique de Bootstrap </dt>
                <dd>
                    <p>Pour savoir comment Bootstrap a émergé, il faut savoir le besoin que Bootstrap a comblé. En effet, il y avait pour les langages frontend plusieurs bibliothèques qui menaient à des problèmes de cohérences et à un besoin élevé de maintenance.</p>
                </dd>
                <dt>Ce que Bootstrap va nous permettre de faire</dt>
                <dd>
                    <p>Il apparaît que Bootstrap est essentiellement utilisé pour faire du responsive via ses fonctionnalités CSS. Avec les variables, il s’agissait des deux plus gros points forts de Bootstrap avant que CSS n’implémente nativement ces fonctionnalités.</p>
                    <p>Regardons à quoi peut ressembler du HTML utilisant Bootstrap dans un but responsive.</p>
                    <p><u>Premièrement :</u></p>
                    <img src="assets/bootstrap1.png" alt="Les classes Bootstrap pour faire du responsive">
                    <p>Le tableau ci-dessus nous explique de façon simple comment faire du responsive avec Bootstrap. Avec l’attribut class, on ajoute le ‘class prefix’ dans notre balise HTML suivi du nombre de colonnes ou fr que prendra notre élément.</p>
                    <p><u>Exemple de code :</u></p>
                    <img src="assets/bootstrap2.png" alt="Du HTML avec des classes Bootstrap">
                    <p>Il faut regarder les classes : col signifie colonne, md médium (le format d’écran visé par cette classe), donc au format médium (entre 768px et 991px), la page codée contient 7 colonnes (de ce qui est visible sur l’extrait) de 1fr. On peut remarquer sur la capture d’écran qu’il y a une div sans contenu qui fait 1fr de large. Par ailleurs, on peut supposer que ces colonnes font partie d’une div avec une classe Bootstrap <i>row</i>.</p>
                    <p>Cet exemple aide bien à comprendre comment s’utilise le framework. Il en ira de même pour plein d’autre caractéristiques qu’on voudra appliquer à nos éléments.</p>
                    <p>Également un gros point fort de Bootstrap, c’est <i>d’avoir des variables</i>. </p>
                    <p>Plus largement, Bootstrap nous informe de l’étendue de ses capacités via l’arborescence de sa documentation organisée en 7 catégories :</p>
                    <ul class="article-ul">
                        <li>La customisation du formatage par défaut du framework</li>
                        <li>L’organisation du layout</li>
                        <li>Le formatage du contenu de notre page (la typographie, les images, les tableaux…)</li>
                        <li>Les formulaires</li>
                        <li>Les composants, parmi lesquels on peut citer les :
                            <ul class="article-ul">
                                <li><a href="https://getbootstrap.com/docs/5.3/components/carousel/">Carrousels</a> (sliders)</li>
                                <li>Différents types <a href="https://getbootstrap.com/docs/5.3/components/alerts/">d’alertes</a> (qui utiliseront JavaScript pour un évènement clic)</li>
                                <li><a href="https://getbootstrap.com/docs/5.3/components/accordion/">Accordéons</a></li>
                                <li>Pastilles de <a href="https://getbootstrap.com/docs/5.3/components/badge/">notifications</a></li>
                                <li><a href="https://getbootstrap.com/docs/5.3/components/buttons/">Boutons</a></li>
                            </ul>
                        </li>
                        <li>Les « trucs en plus » ou coups de baguette magique (ratio, position, text truncation…)</li>
                        <li>Les <i>utilities</i>, c’est-à-dire ce qui ne rentre pas dans le reste et est modifiable avec l’API Bootstrap (bordures, ombres, espacement, overflow, opacité…)</li>
                    </u> <br>
                    <p>Autres avantages :</p>
                    <ul class="article-ul">
                        <li>Uniformiser les pratiques lorsque plusieurs dévs travaillent ensemble sur les mêmes projets. Tout le monde parle la même langue, on se comprend facilement.</li>
                        <li>Pour un ou une dev backend, connaître Bootstrap est un moyen de faire du frontend « vite-fait » sans devoir se plonger dans le CSS.</li>
                    </ul>
                </dd>
                <dt>Installer Bootstrap</dt>
                <dd>
                    <p>Comme Bootstrap est un framework, il n’a pas d’interface, on doit donc l’installer de telles façons :</p>
                    <p>Via un gestionnaire de paquets (npm)</p>
                    <p>Via un <code>&lt;link:rel></code> et un <code>&lt;script></code> sur HTML :</p>
                    <code>
                        &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                            &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">&lt;/script>
                    </code>
                    
                </dd>
                <dt>Inconvénients de Bootstrap</dt>
                <dd>
                    <p>Bootstrap produit des sites uniformes. De par son formatage par défaut et ses options génériques.</p>
                    <p>Il produit aussi un code lourd, et il formate par défaut notre code dès qu’on le référence dans notre HTML même si on ne met aucune classe Bootstrap dans notre code. Par exemple, les titres ont une taille par défaut. Si on veut outrepasser ce formatage, il faut ajouter du CSS (attention, dans l’HTML, le link:rel de votre CSS doit être après Bootstrap sinon Bootstrap prend le dessus – expérience personnelle). On est donc obligé d’alourdir notre CSS pour outrepasser le formatage de Bootstrap.</p>
                </dd>
            </dl>
            <p><i>
                Désormais, le CSS intègre le flex et le grid ainsi que les variables, ce qui rendait Bootstrap si compétitif et avantageux. Le framework est désormais plutôt controversé dans le milieu du développement. Pour certains développeurs il est un boulet au pied, en particulier si de grosses infrastructures utilisent Bootstrap. Par exemple l’entreprise Septeo a a fabriqué un CMS qui l’utilise et l’implémente sur des milliers de sites. Impossible de refondre le CMS sans des moyens colossaux. L’entreprise est donc coincée avec Bootstrap.</p> <br>
                <p>Ressources :
            </i></p>
            <p><a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/ ">https://getbootstrap.com/docs/5.3/getting-started/introduction/ </a></p>
            <p><a href="https://www.youtube.com/watch?v=77hwpuVHGps ">https://www.youtube.com/watch?v=77hwpuVHGps</a></p>
        </div>

    </section>