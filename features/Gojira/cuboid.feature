Feature: Gojira Cuboid

  Scenario: pole powierzchni bocznej prostopadloscianu
    Given I am on homepage
    When I follow "ppb by Gojira"
    And I fill in "A" with "3"
    And I fill in "B" with "4"
    And I fill in "H" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 70"
