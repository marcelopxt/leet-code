import java.util.Scanner;
import java.util.Stack;

public class Exe9_PalindromeNumber {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int x = sc.nextInt();
        System.out.println(isPalindrome(x));
        sc.close();
    }

    public static boolean isPalindrome(int x) {
        if (x < 0)
            return false;
        Stack<Integer> numbers = new Stack<>();
        String n = String.valueOf(x);
        for (int i = 0; i < n.length(); i++) {
            numbers.push(Integer.parseInt(String.valueOf(n.charAt(i))));
        }
        StringBuilder inverted = new StringBuilder();
        while (!numbers.empty()) {
            inverted.append(numbers.pop());
        }
        return (x == Integer.parseInt(inverted.toString()));
    }
}
