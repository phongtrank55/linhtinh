
public void checkout(){
    Scanner input = new Scanner(System.in);
    System.out.print("Nhap ISBN cần mượn: ");
    String isbn = input.nextLine();
    for(Book b : booksList){
        if(b.getIsbn().equalsIgnoreCase(isbn)){
            if(b.getCopyNums() == 0)
                System.out.print("Sach da het!");
            else
                b.setCopyNums(b.getCopyNums() - 1);
            
            return;
        }
    }
    System.out.print("Khong co ma ISBN nay!");
}
