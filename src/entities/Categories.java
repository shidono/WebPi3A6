/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author salma
 */
public class Categories {
    private int id_cat;
    private String nom_cat;

    public Categories(int id_cat, String nom_cat) {
        this.id_cat = id_cat;
        this.nom_cat = nom_cat;
    }

    public Categories() {
    }

    public Categories(int id_cat) {
        this.id_cat = id_cat;
    }

    public Categories(String nom_cat) {
        this.nom_cat = nom_cat;
    }
    

    public int getId_cat() {
        return id_cat;
    }

    public void setId_cat(int id_cat) {
        this.id_cat = id_cat;
    }

    public String getNom_cat() {
        return nom_cat;
    }

    public void setNom_cat(String nom_cat) {
        this.nom_cat = nom_cat;
    }

    @Override
    public String toString() {
        return "Catégorie : " + nom_cat ;
    }

}
