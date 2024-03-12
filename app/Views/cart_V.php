<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <style>
            /* Styles CSS pour le panier */
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            tr:hover {
                background-color: #f5f5f5;
            }

            h1 {
                text-align: center;
            }

            #total-panier {
                font-weight: bold;
            }

            #passer-commande {
                display: block;
                margin: 20px auto;
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        
    </style>
</head>
<body>
    <h1>Panier</h1>
    
    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>
    
    <p>Total du panier : <span id="total-panier">Montant total</span></p>
    
    <button id="passer-commande">Passer la commande</button>
    
    <script>
        // Récupérer les éléments du DOM
        const nomProduit = document.getElementById('nom-produit');
        const prixProduit = document.getElementById('prix-produit');
        const quantiteProduit = document.getElementById('quantite-produit');
        const totalProduit = document.getElementById('total-produit');
        const totalPanier = document.getElementById('total-panier');
        const passerCommande = document.getElementById('passer-commande');

        // Fonction pour mettre à jour le total du panier
        function updateTotalPanier() {
            let total = 0;
            const lignesProduits = document.querySelectorAll('tbody tr');
            lignesProduits.forEach((ligne) => {
                const totalProduit = parseFloat(ligne.querySelector('#total-produit').textContent);
                total += totalProduit;
            });
            totalPanier.textContent = total.toFixed(2);
        }

        // Écouter le clic sur le bouton "Passer la commande"
        passerCommande.addEventListener('click', () => {
            alert('Commande passée avec succès !');
        });

        // Exemple de mise à jour des valeurs du panier
        nomProduit.textContent = 'Ordinateur portable';
        prixProduit.textContent = '999.99';
        quantiteProduit.textContent = '2';
        totalProduit.textContent = (parseFloat(prixProduit.textContent) * parseInt(quantiteProduit.textContent)).toFixed(2);

        // Mettre à jour le total du panier initial
        updateTotalPanier();
    </script>
</body>
</html>