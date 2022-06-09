unit Unit1;

{$mode objfpc}{$H+}

interface

uses
  Classes, SysUtils, Forms, Controls, Graphics, Dialogs, StdCtrls, ExtCtrls,
  http, Windows;

type

  { TForm1 }

  TForm1 = class(TForm)
    Button1: TButton;
    Button2: TButton;
    Button3: TButton;
    Button4: TButton;
    Button5: TButton;
    Button6: TButton;
    Button7: TButton;
    Button8: TButton;
    Edit1: TEdit;
    Edit2: TEdit;
    GroupBox1: TGroupBox;
    GroupBox2: TGroupBox;
    GroupBox3: TGroupBox;
    Image1: TImage;
    Image2: TImage;
    Image3: TImage;
    Label1: TLabel;
    Label2: TLabel;
    Label3: TLabel;
    Label4: TLabel;
    Memo1: TMemo;
    Memo2: TMemo;
    procedure Button1Click(Sender: TObject);
    procedure Button2Click(Sender: TObject);
    procedure Button3Click(Sender: TObject);
    procedure Button4Click(Sender: TObject);
    procedure Button5Click(Sender: TObject);
    procedure Button6Click(Sender: TObject);
    procedure Button7Click(Sender: TObject);
    procedure Button8Click(Sender: TObject);
    procedure FormCreate(Sender: TObject);
  private

  public

  end;

var
  Form1: TForm1;
  daemon:TTCPHttpDaemon;

implementation

{$R *.lfm}

{ TForm1 }

procedure TForm1.Button1Click(Sender: TObject);
begin
    http.port:=Edit1.Text;

    daemon:=TTCPHttpDaemon.create;
    Button1.Enabled:=false;
    Button5.Enabled:=true; // Web
    Edit1.Enabled:=false;
    Button2.Enabled:=true;
    Button3.Enabled:=true;
    Label4.Caption:='Opened.';
    Label4.Font.Color:=clGreen;
end;

procedure TForm1.Button2Click(Sender: TObject);
begin
    daemon.Terminate;
    Button1.Enabled:=true; 
    Button5.Enabled:=false; // Web
    Edit1.Enabled:=true;
    Button2.Enabled:=false;
    Button3.Enabled:=false;
    Label4.Caption:='Closed.';
    Label4.Font.Color:=clRed;
end;

procedure TForm1.Button3Click(Sender: TObject);
begin
  daemon.Terminate;
  Sleep(1500);
  daemon:=TTCPHttpDaemon.create;
//  Button3.Enabled:=false;
  Label4.Caption:='Reopened.';
  Label4.Font.Color:=clOlive;
end;

procedure TForm1.Button4Click(Sender: TObject);
var
  listNew: TStringlist;
begin
  ShellExecute(Handle, nil, PChar(Edit2.Text), nil, nil, SW_HIDE);

  listNew:=TStringList.Create;
  listNew.LoadFromFile('print.php');
  Sleep(1500);
  Memo1.Lines:=listNew;
end;

procedure TForm1.Button5Click(Sender: TObject);
var
  portDop : String;
begin
  if Edit1.Text <> '80' then
   portDop:=':'+Edit1.Text else portDop:='';

  ShellExecute(Handle, Pchar('open'), Pchar('http://localhost'+portDop), Pchar(0), nil, SW_NORMAL);
 // ShellExecute(Handle, nil, 'explorer', PChar('http://localhost'+portDop), nil, SW_HIDE);
end;

procedure TForm1.Button6Click(Sender: TObject);
var
  FileName : String;
  Slfile : TStringList;
begin
  FileName := 'print_src.php';
  Slfile := TStringList.Create;
  Slfile.Text := Memo2.Text;
  Slfile.SaveToFile(FileName);
  FreeAndNil(Slfile);
end;

procedure TForm1.Button7Click(Sender: TObject);
begin
  begin
 if not FileExists('C:\Program Files\Notepad++\notepad++.exe') then begin
  ShellExecute(Handle, 'open', 'notepad.exe', 'print_src.php', nil, SW_SHOWNORMAL);
 end else begin
  ShellExecute(Handle, 'open', 'C:\Program Files\Notepad++\notepad++.exe', 'print_src.php', nil, SW_SHOWNORMAL);
 end;
end;
end;

procedure TForm1.Button8Click(Sender: TObject);
var
  listNew,listSRC: TStringlist;
begin
  listNew:=TStringList.Create;
  listNew.LoadFromFile('print.php');
  Memo1.Lines:=listNew;

  listSRC:=TStringList.Create;
  listSRC.LoadFromFile('print_src.php');
  Memo2.Lines:=listSRC;
end;

procedure TForm1.FormCreate(Sender: TObject);
var
  listSRC: TStringlist;
begin
  listSRC:=TStringList.Create;
  listSRC.LoadFromFile('print_src.php');
  Memo2.Lines:=listSRC;
end;


end.

