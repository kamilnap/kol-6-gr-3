Feature: Obliczenia

  Scenario: Kalkulator 2*a*h+2*b*h
    Given I am on homepage
    When I follow "prostopadloscian by Krzysztof Debowski"
    And I fill in "A" with "5"
    And I fill in "B" with "7"
    And I fill in "H" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 72"
