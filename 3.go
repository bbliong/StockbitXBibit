package main

import (
	"fmt"
	"strings"
)

func main() {
	fmt.Println(findFirstStringInBracket("Apakah ini akan diambil ? (Jawab)"))
}

func findFirstStringInBracket(str string) string {
	var result string

	if oBracket, cBracket := strings.Index(str, "("), strings.Index(str, ")"); oBracket > 0 && cBracket > 0 && oBracket < cBracket {
		result = str[oBracket+1 : cBracket]
	}

	return result
}
