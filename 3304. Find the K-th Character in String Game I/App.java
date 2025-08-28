public class App {
    public static void main(String[] args) throws Exception {
        System.out.println(kthCharacter(10));
    }

    public static char kthCharacter(int k) {
        StringBuilder word = new StringBuilder("a");
        StringBuilder extra = new StringBuilder("");
        while (word.length() <= k) {
            for (int i = 0; i < word.length(); i++) {
                char letter = word.charAt(i);
                extra.append((char) (letter + 1));
            }
            word.append(extra.toString());
            extra.delete(0, extra.length());
        }
        return word.charAt(k-1);
    }

}