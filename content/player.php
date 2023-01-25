<main class="main-article">
    <section class="article">
        <div class="upward" title="Haut de page"><a href="#header">🡩</a></div>
        <h1>Player audio</h1>
        <time>23 décembre 2022</time>

        <p>Ici sont regroupés les concepts (méthodes, évènements, etc) JavaScript qui ont eu une place importante dans l'avancement du projet de player audio <a href="index.php?page=player">Aurora</a>.</p>
        <hr>
        <div class="article">
            <dl>
                <dt>Evènement 'input’ : </dt>
                <dd>
                    <p>
                        Déclenche un évènement utilisé dans le player audio sur les inputs de type range (dans notre cas). Lorsqu’on saisit le bouton/curseur de l’input range, les effets du changement de paramètres se font sentir, alors qu’avec un évènement de type 'click’, c’est lorsqu’on relâche le curseur que les paramètres s’adaptent, pas au déplacement.
                        Exemple : pour un input range pour régler le volume, lorsqu’on déplace le bouton, le volume change alors même qu’on n’a pas lâché le curseur.
                    </p>
                    <p>
                        Extrait de Mozilla (mieux expliqué) : est déclenché de façon synchrone quand la valeur d'un élément <code> &lt;input></code> (entrée), <code> &lt;select></code> (sélection) ou <code> &lt;textarea></code> (zone de texte) est modifiée
                    </p>
                    <p><i>Syntaxe type:</i> <code>monInput.addEventListener ('input’, fonction);</code></p>
                </dd>

                <dt>currentTime et duration :</dt>
                <dd>
                    <p><code>currentTime</code> et <code>duration</code> sont deux propriétés de l’HTML audio. <code>currentTime</code> renvoie une valeur qui correspond à un instant T sur la durée totale de la chanson (duration). </p>
                </dd>

                <dt>Event timeupdate :</dt>
                <dd>
                    <p>L’évènement se produit quand <code>currentTime</code> est mis à jour (à une fréquence située entre 4 et 66Hz). Dans le cadre du player audio, on peut utiliser cet type d’évènement pour mettre à jour la barre de progression de la chanson (input de type range). </p>
                    <p>Exemple :</p>
                    <img src="assets/timeupdate.png" alt="Exemple d'event timeupdate">
                </dd>

                <dt>forEach :</dt>
                <dd>
                    <p>La méthode <code>forEach()</code> permet d’effectuer une ou des actions sur chaque élément d’un tableau (array). </p>
                    <p>Syntaxe type: <br>
                        <code>monTableau.forEach(élément => {action qui va s’exécuter pour chaque élément de monTableau});</code>
                    </p>
                    <p><i>Note :</i> 'élément’ constitue un callback, c’est-à-dire qu’on appelle la fonction à l’intérieur d’elle-même, puisque forEach est le raccourci de « pour chaque ELEMENT » et qu’on rappelle chaque élément.
                        Dans mon cas, j’ai utilisé <code>forEach</code> pour place chaque chanson de mon tableau de chanson dans un tableau HTML
                    </p><img src="assets/foreach.png" alt="Exemple de forEach contenant un EventListener">
                    <figcaption>On peut même créer un évènement dans un <code>forEach</code></figcaption>
                </dd>

                <dt>Object.values : </dt>
                <dd>
                    <p>Méthode qui renvoie un tableau contenant les valeurs des clés d’un objet.</p>
                    <p><i>Exemple de syntaxe :</i></p>
                    <img src="assets/objectvalues.png" alt="Un console log de la méthode Object.values">
                </dd>

                <dt>Déconstruction d’un morceau de code :</dt>
                <dd><img src="assets/morceau.png" alt="On peut lire : let a = Object.values(trackListInfo[i]).some(s=>source.includes(trackListInfo[i].source">
                    <p>Le i est là car il s’agit d’une boucle for.</p>
                    <p>Partons de la fin : <code>trackListInfo[i].source</code> correspond à la valeur de la clé source (chemin de l’audio) de chacune de mes chansons (qui sont des objets JavaScript). </p>
                    <p><code>source.includes(trackListInfo[i].source)</code> :
                        Le premier ‘source’ est une variable correspondant au <code>.src</code> de l’audio. Cet <code>audio.src</code> renvoie à l’adresse complète de la source de l’audio. En l’occurrence, j’ai demandé au lecteur de lire une chanson avec la [source] d’une de mes {chansons}, par exemple ‘musique/rickroll.mp3’, mais lorsque je demande la valeur d’<code>audio.src</code>, la console renvoie https://monsite.com/musique/rickroll.mp3 par exemple.
                    </p>
                    <p>Impossible donc, de savoir quelle chanson est jouée dans le lecteur.</p>
                    <p>Pour savoir quelle {chanson} joue, je dois demander à la machine de voir si la [source] d’une de mes {chansons} fait partie de audio.src.</p>
                    <p>« Traduite » en français, ce morceau de ligne de code pourrait se dire : « est-ce que la source contient/inclut le [chemin] d’une de mes {chansons} ? »</p>
                    <p>On sait que le <code>Obj.values(trackListInfo[i])</code> nous retourne un [tableau] des valeurs d’une {chanson} i. <br>
                        Le <code>tableauChanson.some(s=>source)</code> signifie : est-ce qu’il y a des valeurs dans ma chanson qui sont <code>audio.src</code> ? En ajoutant le <code>.includes</code> comme dans le morceau de code, on ne vérifie qu’une partie de <code>audio.src</code>.
                    </p>
                    <p>Pour résumer, on peut traduire ce morceau entier de code par : <br>
                        Est-ce qu’une valeur dans ma {chanson} i correspond à un segment de ma source audio ?
                    </p>
                    <p>Puis avec la boucle <code>for</code> (d’où le i), on demande de regarder pour toutes les chansons. Lorsqu’une chanson vérifie cette condition, on sait que i est le numéro de la chanson jouée, ce que l’on cherchait.</p>
                </dd>

                <dt>firstElementChild : </dt>
                <dd>
                    <p>Cette propriété renvoie le premier nœud enfant d’un élément, elle est en lecture seule.

                    </p>
                    <p>Exemple de syntaxe :</p><img src="assets/firstelementchild.png" alt="Utilisation de firstElementChild">
                    <p class="center-text"><b>ATTENTION</b></p>
                    <p><b>Ne pas confondre avec <code>firstChild</code> :</b> <code>firstChild</code> fonctionne presque comme <code>firstElementChild</code>, sauf que <code>firstChild</code> va renvoyer ce qui suit l’élément ciblé dans l’HTML. <code>firstChild</code> va prendre en compte l’indentation, les espaces, les tabulations, etc, situés de l’HTML. Dans ce cas, <code>firstChild</code> renvoie <code>#text</code>. Assez peu utile à priori.</p>
                </dd>


            </dl>
        </div>

    </section>