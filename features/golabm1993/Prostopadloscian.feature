Feature: Obliczenia

  Scenario: Prostopadloscian 2 * a * h + 2 * b * h
    Given I am on homepage
    When I follow "Prostopadloscian by golabm1993"
    And I fill in "a" with "2"
    And I fill in "b" with "3"
    And I fill in "h" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 40"