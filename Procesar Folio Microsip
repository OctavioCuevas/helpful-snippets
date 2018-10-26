    public String folioSinJustificar(String folio) {
        String folioSinCeros = "";
        boolean bandera = true;
        char[] toCharArray = folio.toCharArray();
        for (int i = 0; i < folio.length(); i++) {
            char caracter = toCharArray[i];
            if (Character.isDigit(caracter)) {
                if (caracter != '0') {
                    folioSinCeros += caracter;
                    bandera = false;
                } else if (!bandera) {
                    folioSinCeros += caracter;
                }
            } else {
                folioSinCeros += caracter;
            }
        }
        folioSinCeros = folioSinCeros.toUpperCase();
        return folioSinCeros;
    }

    public String folioJustificado(String folio) {
        String numeros = "";
        String letras = "";
        char[] toCharArray = folio.toCharArray();
        for (int i = 0; i < folio.length(); i++) {
            char caracter = toCharArray[i];
            if (Character.isDigit(caracter)) {
                numeros += caracter;
            } else if (Character.isLetter(caracter)) {
                letras += caracter;
            }
        }
        int numLetras = letras.length();
        int numNumeros = numeros.length();
        String folio00 = numeros;
        if ((numLetras - numNumeros) < 9) {
            for (int i = numNumeros; i < 9 - numLetras; i++) {
                folio00 = "0" + folio00;
            }
            folio00 = letras + folio00;
        } else {
            folio00 = letras + numeros;
        }
        folio00 = folio00.toUpperCase();
        return folio00;
    }
