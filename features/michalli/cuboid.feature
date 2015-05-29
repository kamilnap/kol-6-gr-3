Feature: Obliczenia

  Scenario: Cuboid
    Given I am on homepage
    When I follow "Cuboid by michalli"
    And I fill in "A" with "7"
    And I fill in "B" with "3"
    And I fill in "H" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 80"