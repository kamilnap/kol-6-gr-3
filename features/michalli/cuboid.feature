Feature: Obliczenia

  Scenario: Cuboid
    Given I am on homepage
    When I follow "Cuboid by michalli"
    And I fill in "a" with "7"
    And I fill in "b" with "3"
    And I fill in "h" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 80"