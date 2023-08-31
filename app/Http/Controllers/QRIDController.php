<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class QRIDController extends Controller
{
    public function showLinks($id)
    {
        // Vérifier si l'utilisateur avec cet ID existe dans la base de données
        $user = User::find($id);

        if ($user) {
            // Si l'utilisateur existe, récupérez les liens associés
            $links = [
                [
                    'label' => 'Questions rapides SMS',
                    'url' => 'tel:5149001061',
                    'description' => 'Envoi un SMS',
                    'icon' => 'fa-solid fa-phone',
                ],
                [
                    'label' => 'Demande par courriel',
                    'url' => 'mailto:stratego.id-3.net',
                    'description' => "Envoi d'un courriel",
                    'icon' => 'fa-solid fa-envelope',
                ],
                [
                    'label' => 'Support',
                    'url' => 'mailto:support@id-3.net',
                    'description' => "Signaler un problème ou une panne",
                    'icon' => 'fa-solid fa-headset',
                ],
                [
                    'label' => 'Comptabilité',
                    'url' => 'mailto:facturation@id-3.net',
                    'description' => "C'est une question de facturation",
                    'icon' => 'fa-solid fa-calculator',
                ],
                [
                    'label' => 'Demande publicitaire',
                    'url' => 'tel:5149001061',
                    'description' => "Tu veux de la pub",
                    'icon' => 'fa-solid fa-bullhorn',
                ],
                [
                    'label' => 'Ventes',
                    'url' => 'mailto:ventes@id-3.net',
                    'description' => "Envoi un courriel au vente",
                    'icon' => 'fa-solid fa-cart-plus',
                ],
            ];


            // Renvoyez la vue avec les liens
            return view('qrid.links', ['links' => $links, 'user' => $user]);
        } else {
            // Si l'utilisateur n'existe pas, renvoyez une vue d'erreur
            return view('stratego');
        }
    }


    public function showVcard($id)
    {
        // Vérifier si l'utilisateur avec cet ID existe dans la base de données
        $user = User::find($id);

        if ($user) {
 
            // Renvoyez la vue avec les valeurs de l'utilisateur
            return view('qrid.vcard', ['user' => $user]);
        } else {
            // Si l'utilisateur n'existe pas, renvoyez une vue d'erreur
            return view('qrid.notfound');
        }
    }



    public function showNVcard(Request $request)
    {
        $id = $request->query('qrid');
        $type = $request->query('type');

        $user = User::find($id);
 
        if ($user) {
            return view('qrid.vcard', ['user' => $user]);
        } else {
            return view('qrid.notfound'); 
        }

    }


    public function showNLinks(Request $request)
    {
        $qrid = $request->query('id'); // query parameter 'id'
        $type = $request->query('type'); // query parameter 'type'

        return view('qrid.links', [
            'id' => $qrid,
            'type' => $type
        ]);
    }
}
