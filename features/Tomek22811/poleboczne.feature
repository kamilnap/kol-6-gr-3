Feature: Obliczenia

  Scenario: pole boczne prostopadloscianu
    Given I am on homepage
    When I follow "prostopadloscian by Tomek22811"
    And I fill in "A" with "3"
    And I fill in "B" with "2"
    And I fill in "C" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 30"