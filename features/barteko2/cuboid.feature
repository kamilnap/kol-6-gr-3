Feature: Obliczenia

  Scenario: Cuboid 2 * a * h + 2 * b * h
    Given I am on homepage
    When I follow "Cuboid by barteko2"
    And I fill in "A" with "5"
    And I fill in "B" with "2"
    And I fill in "H" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 28"