Feature: Obliczenia

  Scenario: Cuboid 2 * a * h + 2 * b * h
    Given I am on homepage
    When I follow "Kalkulator by barteko2"
    And I fill in "a" with "5"
    And I fill in "b" with "2"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 88"