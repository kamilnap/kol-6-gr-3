Feature: Obliczenia

  Scenario: Kalkulator 2*a*h + 2*b*h
    Given I am on homepage
    When I follow "Prostopadloscian by kamilnap"
    And I fill in "a" with "1"
    And I fill in "b" with "2"
    And I fill in "h" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 18"