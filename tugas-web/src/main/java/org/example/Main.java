package org.example;

import org.apache.jena.rdf.model.*;
// Press Shift twice to open the Search Everywhere dialog and type `show whitespaces`,
// then press Enter. You can now see whitespace characters in your code.
public class Main {
    public static void main(String[] args) {
        // Create an RDF model
        Model model = ModelFactory.createDefaultModel();

        // Create resources and properties
        Resource john = model.createResource("http://somewhere/person#john");
        Property nameProperty = model.createProperty("http://somewhere/person#Name");
        Property nicknameProperty = model.createProperty("http://somewhere/person#NickName");
        Property fullnameProperty = model.createProperty("http://somewhere/person#FullName");

        // Create nodes and connect them
        Resource genidA30163 = model.createResource("genid:A30163");
        Resource js = model.createResource("JS");
        Resource johnSmith = model.createResource("John Smith");

        john.addProperty(nameProperty, genidA30163);
        john.addProperty(nicknameProperty, js);
        john.addProperty(fullnameProperty, johnSmith);

        Property familyProperty = model.createProperty("http://somewhere/person#Family");
        Property givenProperty = model.createProperty("http://somewhere/person#Given");

        // Connect genid:A30163 to its branches
        genidA30163.addProperty(familyProperty, "Smith");
        genidA30163.addProperty(givenProperty, "John");

        // Print the RDF model
        model.write(System.out, "TURTLE");
    }
}