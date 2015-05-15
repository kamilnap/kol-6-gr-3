Feature: Obliczenia

  Scenario: Prostopadloscian 2 * a * h + 2 * b * h
    Given I am on homepage
    When I follow "Prostopadloscian by golabm1993"
    And I fill in "A" with "2"
    And I fill in "B" with "3"
    And I fill in "H" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 40"