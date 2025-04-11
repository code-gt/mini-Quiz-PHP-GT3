# 📝 TP – Crée ton mini Quiz PHP (avec score)

## 🎯 Objectif
Créer un petit **quiz interactif** en PHP avec 5 questions, correction automatique, et score cumulé grâce aux **sessions**.

---

## 🔧 Étapes à suivre

### 1. Intégrer PHP dans du HTML

Tu peux afficher une variable ou un texte PHP **dans une balise HTML**.

```php
<p>Bonjour <?php echo "Alice"; ?> !</p>
// ou
<p>Bonjour <?= $prenom ?> !</p>
```

---

### 2. Créer des boutons radio dans ton formulaire

Voici le format attendu pour **chaque réponse possible** :

```html
<input type="radio" name="q1" value="reponse_possible_1">
<input type="radio" name="q1" value="reponse_possible_2">
<input type="radio" name="q1" value="reponse_possible_3">
```

> ⚠️ Le `name` doit être **identique pour chaque groupe de réponses**, sinon ça ne marchera pas !

---

### 3. Préparer un tableau de **bonnes réponses**

Dans la page `correction.php`, tu devras créer un **tableau associatif** contenant les **bonnes réponses**.

🧠 Astuce : chaque **clé du tableau** doit correspondre au **`name`** de la question (par exemple `q1`, `q2`, etc.).

Tu choisis toi-même les valeurs correctes selon les `value` que tu as mises dans le formulaire.

---

### 4. Corriger automatiquement avec une boucle

Tu dois comparer les réponses de l’utilisateur (`$_POST`) avec les bonnes réponses (ton tableau).  
Utilise une condition pour vérifier que la réponses fournie dans le html corresponde à la réponse de ton tableau associatif.  
Utiliser une variable `$score` pour calculer les points. 

💡 Tu peux t’aider d’une boucle `foreach` classique sur un tableau.

```php
foreach ($tableau as $cle => $valeur) {
  // traitement ici
}
```

👉 À toi d’adapter cette structure pour comparer les réponses et compter les bonnes.

---

### 5. Ajouter un score cumulé avec les sessions

Tu vas devoir :
- **Démarrer une session** avec `session_start()` (tout en haut du fichier)
- Créer une **variable de session** (par exemple `$_SESSION['score_total']`)
- L’**incrémenter** à partir du score `$score`  obtenu lors de ce quiz

> 🧠 Le but est de **cumuler les scores** si on refait plusieurs fois le quiz !

---

### 6. Gérer le prénom de l’utilisateur avec un cookie

Tu dois :
- Créer un **champ de formulaire pour demander le prénom**
- Le stocker dans un **cookie** avec `setcookie` puis rediriger avec `header("Location: index.php");`
- L’utiliser pour **afficher un message personnalisé** sur la page d’accueil

> Exemple attendu : "Bienvenue Léa, bon quiz !"

---

### 7. Bonus (facultatif)

- Ajouter un bouton pour **réinitialiser le score cumulé** (en vidant la session)

---

## ✅ Ce que ton quiz doit faire

- ✅ 5 questions (boutons radio)
- ✅ Correction automatique
- ✅ Score affiché sur 5
- ✅ Score cumulé avec les sessions
- ✅ Cookie avec le prénom affiché
- ✅ Un minimum de style avec PicoCSS, Bootstrap, Tailwind ou Materialize

---

## 💡 Astuce

Sois organisé :
- `index.php` → le quiz
- `correction.php` → les résultats
- `reset.php` → pour remettre le score à 0 (bonus)
