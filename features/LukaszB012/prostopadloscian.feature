Feature: Obliczenia

  Scenario: Pole powierzchni bocznej prostopadloscianu
    Given I am on homepage
    When I follow "Prostopadloscian by LukaszB012"
    And I fill in "A" with "4"
    And I fill in "B" with "3"
    And I fill in "H" with "2"
    And I press "Oblicz"
    Then I should see "Pole powierzchni bocznej wynosi: 28"